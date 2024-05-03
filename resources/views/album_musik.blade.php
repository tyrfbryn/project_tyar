@php
    $am = \App\Models\AlbumMusik::all();
    $am2 = \App\Models\AlbumMusik::where('tahun', 2023)->orderBy('id', 'desc')->get();
    $am3 = \App\Models\AlbumMusik::find(3);
    $am4 = \App\Models\AlbumMusik::where('tahun', 2019)->orderBy('id', 'asc')->first();


@endphp


@foreach ($am as $data)
    <h1><font color="red"> Eloquent All </font></h1>
    <h1>ID : {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach

@foreach ($am2 as $data)
    <h1><font color="blue"> Eloquent Get </font></h1>
    <h1>ID : {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach

    <h1><font color="yellow"> Elequent Find </font></h1>
    <h1>ID : {{ $data->id ?? 'kosong'}}</h1>
    <h1>Judul : {{ $data->judul ?? 'kosong' }}</h1>
    <h1>Tahun : {{ $data->tahun ?? 'kosong'}}</h1>
    <h1>Cover Album : {{ $data->cover_album ?? 'kosong' }}</h1>
    <hr>

    <h1><font color="green"> Elequent First </font></h1>
    <h1>ID : {{ $data->id ?? 'kosong'}}</h1>
    <h1>Judul : {{ $data->judul ?? 'kosong' }}</h1>
    <h1>Tahun : {{ $data->tahun ?? 'kosong'}}</h1>
    <h1>Cover Album : {{ $data->cover_album ?? 'kosong' }}</h1>
    <hr>