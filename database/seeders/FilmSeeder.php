<?php

namespace Database\Seeders;
use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul'=> 'Jumanji 2',
            'deskripsi'=> 'lorem ipsum.....'
        ]);

        Film::insert([
            'judul'=> 'lion king ',
            'deskripsi'=> 'lorem ipsum.....'
        ]);

        Film::insert([
            'judul'=> 'fast and fourios',
            'deskripsi'=> 'lorem ipsum.....'
        ]);

    }
}
