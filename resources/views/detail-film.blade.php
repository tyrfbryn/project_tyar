{{-- Start One To One --}}
<h1>Judul Film : {{ $film->judul }}</h1>
<p>Deskripsi Film : {{ $film->deskripsi }}</p>
<span>
    <h3>Kode Film : {{ $film->DetailFilm->code_film }}</h3>
    <h3>Url Imdb : <a href="{{ $film->DetailFilm->url_imdb }}" target="_blank">
        Klik Di Sini </a>
    </h3>
</span>

{{-- Start One To Many --}}
@foreach ($film->MediaFilm as $item)
    <p>Media Title : {{ $item->title }}</p>
    <p>Link Youtube : <a href="https://www.youtube.com/results?search_query=tanboy+kun">Klik Di Sini</a></p>
    @if ($item->tipeMedia)
    <img src="{{ $item->urlMedia }}" alt="" height="200">
    @else
    @endif
    <hr>
@endforeach
