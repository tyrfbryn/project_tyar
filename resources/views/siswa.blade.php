@php
    $siswa = \App\Models\Siswa::find(2);
    $siswa2 = \App\Models\Siswa::where('id', '!=',1);
    //$siswa = \App\Models\Siswa::where('kelas', 'XI RPL 2')
           // ->orderBy('id', 'desc')
            //->where('nama', 'Tyar febriyano')
            //->groupBy('id')
            //->get();
    $siswa3 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first();
@endphp
<h2>Daftar Siswa SMK Assalaam</h2>
<h1>ID : {{ $data->id ?? 'kosong'  }}</h1>
<br>
<h1>Nama : {{ $siswa3->nama ?? 'kosong' }}</h1>
<br>
<h1>Kelas : {{ $siswa3->kelas ?? 'kosong' }}</h1>
<br>
<h1>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? 'kosong' }}</h1>
<hr>


