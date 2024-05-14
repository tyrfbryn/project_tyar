@extends('layout.layout')
@section('content')
<div class="container" align="center">
    <div class="row">
        <div class="col mt-5">
            <div class="card" style="width: 22rem;">
                <img src="{{ $artikel->foto }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                    <p class="card-text">{{ $artikel->kategori }}</p>
                    <p>Jumlah View: {{ $artikel->konten }}</p>
                    <p>Penulis: {{ $artikel->penulis }}</p>
                    <p><a href="">Link</a></p>
            </div>
        </div>
    </div>
</div>