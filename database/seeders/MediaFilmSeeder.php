<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert(
            [
                'film_id' => 1,
                'tipeMedia' => 1,
                'title' => 'arsitek',
                'urlMedia' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS28ZbxZCX88L7EwuQ0i2vAs9BpBVBJuvj4mf_alkNmYw&s'
            ]
            );

        MediaFilm::insert(
            [
                'film_id' => 1,
                'tipeMedia' => 1,
                'title' => 'petinju',
                'urlMedia' => 'https://m.media-amazon.com/images/I/71j7G6JtXhL._AC_UF1000,1000_QL80_.jpg'
            ]
            );

        MediaFilm::insert(
            [
                'film_id' => 1,
                'tipeMedia' => 1,
                'title' => 'pembalap',
                'urlMedia' => 'https://cdn-4.motorsport.com/images/mgl/0rG37m52/s8/marc-marquez-gresini-racing.jpg'
            ]
            );
    }
}
