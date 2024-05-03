<?php

namespace Database\Seeders;
use App\Models\DetailFilm;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert(
            [
            'film_id'=> 1,
            'code_film'=> 'vi1105249817',
            'url_imdb'=> 'https://www.imdb.com/video/vi1105249817/?listId=ls025720609&ref_=hp_hp_e_5',
            ]
         );

        DetailFilm::insert(
            [
            'film_id'=> 2,
            'code_film'=> 'vi2061944345',
            'url_imdb'=> 'https://www.imdb.com/video/vi2061944345/?listId=ls053181649&ref_=hm_hp_i_hero-video-1_1',
            ]
         );

        DetailFilm::insert(
            [
            'film_id'=> 3,
            'code_film'=> 'vi1984545049',
            'url_imdb'=> 'https://www.imdb.com/video/vi1984545049/?ref_=vp_rv_2',
        ]
    );


    }
}
