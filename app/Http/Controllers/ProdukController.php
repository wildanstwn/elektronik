<?php
// app/Http/Controllers/ProdukController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\TipeProduk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::with('typeProduk')->get();
        return view('produk.index', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'type_produk_id' => 'required'
        ]);

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('images');
        } else {
            $gambar = ''; 
        }

        // Create new product
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->gambar = $gambar;
        $produk->type_produk_id = $request->type_produk_id;
        $produk->save();

        return redirect()->route('produk.index');
    }

    public function detail($id)
    {
        $produk = Produk::with('typeProduk')->find($id);

        if (!$produk) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return view('produk.detail', compact('produk'));
    }

    public function kulkas()
    
        {
            $produks = Produk::where('type_produk_id', 1)->get(); 
            
            return view('produk.kulkas', [
                'produks' => $produks
            ]);
        }
    public function tv()
    
        {
            $produks = Produk::where('type_produk_id', 2)->get(); 
            
            return view('produk.tv', [
                'produks' => $produks
            ]);
        }
    public function ac()
    
        {
                $produks = Produk::where('type_produk_id', 3)->get(); 
                
                return view('produk.ac', [
                    'produks' => $produks
                ]);
        }    
    }
