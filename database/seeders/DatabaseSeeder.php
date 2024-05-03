<?php

namespace Database\Seeders;

use App\Models\AlbumMusik;
use App\Models\Film;
use App\Models\Sekolah;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            SiswaSeeder::class,
            SekolahSeeder::class,
            AlbumMusikSeeder::class,
            FilmSeeder::class,
            DetailFilmSeeder::class,
            MediaFilmSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
