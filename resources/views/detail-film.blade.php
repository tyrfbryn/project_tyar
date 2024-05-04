{{-- Start One To One --}}
{{-- <h1>Judul Film : {{ $film->judul }}</h1>
<p>Deskripsi Film : {{ $film->deskripsi }}</p>
<span>
    <h3>Kode Film : {{ $film->DetailFilm->code_film }}</h3>
    <h3>Url Imdb : <a href="{{ $film->DetailFilm->url_imdb }}" target="_blank">
        Klik Di Sini </a>
    </h3>
</span> --}}

{{-- Start One To Many --}}
{{-- @foreach ($film->MediaFilm as $item)
    <p>Media Title : {{ $item->title }}</p>
    @if ($item->tipeMedia)
    <a href="{{ $item->urlMedia }}">Klik Disini</a>
    @else
    <img src="{{ $item->urlMedia }}" alt="" height="200">
    @endif
    <hr>
@endforeach --}}

@extends('layout.layout')
@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"> {{ $film->judul }} </h1>
        <p class="lead text-muted">{{ $film->deskripsi }}</p>
        <p>
          <a href="{{ url($film->DetailFilm->url_imdb)}}" class="btn btn-primary my-2">Lihat Halaman IMDB</a>
          <a href="{{ url('/film') }}" class="btn btn-primary my-2">Kemabali ke Home</a>
        </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film->MediaFilm as $item)
        <div class="col">
          <div class="card shadow-sm">
            @if ($item->tipeMedia)
                URL Media : <a href="{{ $item->urlMedia }}">Klik Di Sini</a>
            @else
                <img src="{{ $item->urlMedia }}" height="200">
            @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection