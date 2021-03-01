<?php

namespace Database\Seeders;

use App\Helpers\SwApi;
use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param $swApi SwApi
     * @return void
     */
    public function run(SwApi $swApi)
    {
        $films = $swApi->getFilms();

        foreach($films as $film){
            $film = Film::create([
                "title" => $film["title"],
                "episode_id" => $film["episode_id"],
                "opening_crawl" => $film["opening_crawl"],
                "director" => $film["director"],
                "producer" => $film["producer"],
                "release_date" => $film["release_date"],
                "characters" => $film["characters"],
                "url" => $film["url"]
            ]);

            $film->checkRelations();
        }

    }
}
