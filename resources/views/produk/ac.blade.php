<!-- resources/views/produk/kulkas.blade.php -->
@extends('layouts.layout')

@section('title', 'Produk AC')

@section('content')
    <div class="row mt-4">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
        @foreach ($produks as $produk)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($produk->deskripsi, 100) }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($produk->harga, 2) }}</p>
                        <p class="card-text"><strong>Type Produk:</strong> {{ $produk->typeProduk->nama_type }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('produk.detail', $produk->id) }}" class="btn btn-primary btn-blue">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
