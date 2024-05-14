@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($artikel as $artikels )
        <div class="col mt-5">
            <div class="card">
                <img src="{{ $artikels->foto }}" class="card-img-top" alt="..." height="450px" width="300px">
                <div class="card-body" style="height: 450px; margin-botton:10px;">
                    <h5 class="card-title">{{ $artikels->judul }}</h5>
                  <p class="card-text">{{ $artikels->kategori }} </p>
                  <p>Jumlah View: {{ $artikels->konten }}</p>
                  <p>Penulis: {{ $artikels->penulis }}</p>
                  <p><a href="/artikel/id/{{ $artikels->id }}">Link</a></p>
                </div>
              </div>
        </div>
        @endforeach
        <center>
            <div class="card text-center mt-5">
                <div class="card-header">
                    <h5 class="card-title">Kategori</h5>
                </div>
                <div class="card-body">
                    <a href="/artikel/kategori/Bersih" class="btn btn-primary">Bersih</a>
                    <a href="/artikel/kategori/kebersihan" class="btn btn-primary">Kebersihan</a>
                    <a href="/artikel/kategori/kesehatan" class="btn btn-primary">Kesehatan</a>
                </div>
            </div>
        </center>
    </div>
</div>
@endsection