<?php

use App\Http\Controllers\MyController as ControllersMyController;
use App\Models\Siswa;
use App\Models\Sekolah;
use App\Models\AlbumMusik;
use App\Models\Film;
use App\Models\MyController;
use App\Models\MovieController;
use App\Http\Controllers\ArtikelController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/About', function () {
    $nama = "tyar febriyano";
    $jenis = "laki laki";
    $pendidikan = "kuliah s3";
    $pekerjaan= "bisnis sabu";
    
    return view('Biodata', compact('nama', 'jenis', 'pendidikan', 'pekerjaan'));

});

// parameter 
Route::get('/sample/{nama}', function (Request $Request, $nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});

route::get('siswa', function(){
    return view('siswa');
});

route::get('sekolah', function(){
    return view('sekolah');
});

route::get('album_musik', function(){
    return view('album_musik');
});

route::get('film', function(){
    return view('film');
});

route::get('film/{id}', function(int $id){
    return view('detail-film', ['film' => Film::find($id)]);
});

//route with controller
Route::get('perkenalan', [App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan', [App\Http\Controllers\MyController::class,'animals']);

//route with movie
Route::get('movie', [App\Http\Controllers\MovieController::class,'getMovie']);
Route::get('movie/{id}', [App\Http\Controllers\MovieController::class,'getMovieById']);

//route with artikel
Route::get('artikel', [App\Http\Controllers\ArtikelController::class,'getArtikel']);
Route::get('artikel/id/{Id}', [App\Http\Controllers\ArtikelController::class,'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [App\Http\Controllers\ArtikelController::class,'getArtikelKategori']);