@extends('layouts.layout')

@section('title', $produk->nama_produk)

@section('content')
    <div class="card mb-4">
        <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top" style="max-width: 300px; height: auto;" alt="{{ $produk->nama_produk }}">
        <div class="card-body">
            <h5 class="card-title">{{ $produk->nama_produk }}</h5>
            <p class="card-text">{{ $produk->deskripsi }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($produk->harga, 2) }}</p>
            <p class="card-text"><strong>Type Produk:</strong> {{ $produk->typeProduk->nama_type }}</p>
            <div class="mt-auto">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary" style="background-color: #007bff; border-color: #007bff;">Kembali ke Daftar Produk</a>          
        </div>
    </div>
</div>  
</div>

@endsection
