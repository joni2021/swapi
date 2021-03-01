<?php

namespace Database\Seeders;

use App\Helpers\SwApi;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param $swApi SwApi
     * @return void
     */
    public function run(SwApi $swApi)
    {
        $people = $swApi->getPeople();

        foreach ($people as $person) {
            DB::table("people")->insert([
                "name" => $person["name"],
                "birth_year" => $person["birth_year"],
                "eye_color" => $person["eye_color"],
                "gender" => $person["gender"],
                "hair_color" => $person["hair_color"],
                "height" => $person["height"],
                "mass" => $person["mass"],
                "skin_color" => $person["skin_color"]
            ]);
        }



    }
}
