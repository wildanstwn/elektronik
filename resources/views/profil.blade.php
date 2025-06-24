<!-- resources/views/produk/profil.blade.php -->
@extends('layouts.layout')

@section('title', 'Profil Mahasiswa')

@section('content')

<style>
    .profil-image {
        width: 150px;
        height: 150px; 
        object-fit: cover;
    }
    .profil-title {
       
        margin-bottom: 2rem; 
        font-size: 1.25rem;
    }
</style>

<div class="columns is-vcentered mt-4">
    <div class="profil-title"> Profil Pembuat</div>
    <div class="column is-one-third">
        <figure class="image is-128x128">
            <img class="profil-image" src="/image/profil.jpg" alt="Profil Wildan Setiawan">
        </figure>
    </div>
    <div class="column">
        <table class="table is-striped">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Wildan Setiawan</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>220101040</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>SI 22A1</td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>Pemrograman Web</td>
            </tr>
            <tr>
                <td>Dosen Pengampu</td>
                <td>:</td>
                <td>Sopingi M.kom</td>
            </tr>
        </table>
    </div>
</div>

@endsection
