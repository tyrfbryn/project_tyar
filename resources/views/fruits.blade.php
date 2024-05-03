<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach (\App\Models\Sekolah::all() as $data)
<h1>Nama : {{ $data->nama  }}</h1>
<h1>Alamat : {{ $data->alamat  }}</h1>
<h1>Email {{ $data->email }}</h1>
<h1>Tlp {{ $data->tlp }}</h1>
<h1>Status {{ $data->status }}</h1>
<hr>
@endforeach
</body>
</html>