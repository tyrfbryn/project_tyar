@php
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
@endforeach

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