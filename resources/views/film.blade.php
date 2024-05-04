{{-- @php
$film = \App\Models\Film::all(); 
//$singlefilm = \App\Models\Film::find(3);
//$detailfilm = \App\Models\DetailFilm::all();
//$mediafilm = \App\Models\MediaFilm::all();
@endphp

<p>Daftar Film</p>
@foreach ($film as $data)
<h2>Id : {{ $data->id }}</h2>
<h2>Judul Film : {{ $data->judul }}</h2>
<a href="{{ url('film/'.$data->id)}}">Klik Di Sini</a>
<hr>
@endforeach --}}

{{-- <h2>single film</h2>
<p>
<h2>Id : {{ $singlefilm->id }}</h2>
<h2>Judul Film : {{ $singlefilm->judul }}</h2>
<h2>Deskripsi : {{ $singlefilm->deskripsi }}</h2>
<h3>DetailFilm</h3>
<h4>Code Film : {{ $singlefilm->DetailFilm->code_film }}</h4>
<h4>Url Imdb Film : {{ $singlefilm->DetailFilm->url_imdb }}</h4>
</p>

<p style="color:blue">Daftar Detail Film</p>
@foreach ($detailfilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Code Film : {{ $item->code_film }}</h2>
    <h2>Deskripsi : {{ $item->url_imdb }}</h2>
    <h3>Detail Film</h3>
    <h4>Judul Film : {{ $item->judul }}</h4>
    <h4>Deskripsi Film : {{ $item->Film->deskripsi }}</h4>
@endforeach --}}
{{-- @php
    $film = \App\Models\Film::all();
    // $singlefilm = \App\Models\Film::find(3);
    // $detailfilm = \App\Models\DetailFilm::all();
    // $mediafilm = \App\Models\MediaFilm::all();
@endphp

<p><h1>Daftar Film</h1></p>
<hr>
@foreach ($film as $data)
    <h2>Id : {{ $data->id }}</h2>
    <h2>Judul Film : {{ $data->judul }}</h2>
    <a href="{{ url('film/'.$data->id )}}">Klik Di Sini</a>
    <hr>
@endforeach

{{-- <h2>Single Film</h2>
<p>
    <h2>Id : {{ $singlefilm->id }}</h2>
    <h2>Judul Film : {{ $singlefilm->judul }}</h2>
    <h2>Deskripsi : {{ $singlefilm->deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $singlefilm->DetailFilm->code_film }}</h4>
    <h4>Url Imdb Film : {{ $singlefilm->DetailFilm->url_imdb }}</h4>
</p>

<p style="color:chocolate">Daftar Detail Film</p>
@foreach ($detailfilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Code Film : {{ $item->code_film }}</h2>
    <h2>Url Imdb Film : {{ $item->url_imdb }}</h2>
    <h3>Detail Film</h3>
    <h4>Judul Film : {{ $item->Film->judul }}</h4>
    <h4>Deskripsi Film : {{ $item->Film->deskripsi }}</h4>
    <hr>
@endforeach --}}

{{-- @foreach ($mediafilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Film Id : {{ $item->Film->film_id }}</h2>
    <h2>Tipe Media : {{ $item->tipeMedia }}</h2>
    <h3>Detail Film</h3>
    <h4>Tittle : {{ $item->title }} </h4>
    <h4>Url Media : {{ $item->urlMedia }}</h4>
    <hr>
@endforeach --}}

@extends('layout.layout')
@section('content')
@php
    $film = \App\Models\Film::all();
@endphp
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film as $item)
        <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">{{ $item->judul }}</text>
              </svg>

              <div class="card-body">
                <p class="card-text">{{ $item->deskripsi }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{ url('film/' .$item->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection