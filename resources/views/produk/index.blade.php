@extends('layouts.layout')

@section('title', 'Daftar Produk')

@section('content')


    <div>
        <h1>Daftar Produk</h1>
        <p class="margin top: 0">Informasi mengenai berbagai produk elektronik yang memiliki kualitas terbaik dan menjadi salah satu best seller</p>
    </div>    
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>

    <div class="row">
        @foreach ($produks as $produk)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $produk->gambar }}" class="card-img-top" alt="{{ $produk->nama_produk }}">
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
