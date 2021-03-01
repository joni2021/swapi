<?php



return [
    "URL_BASE" => env("SWAPI_URL_BASE"),

    "endpoints" => [
        "films" => \App\Models\Film::class,
        "vehicles" => \App\Models\Vehicle::class,
        "starships" => \App\Models\Starship::class,
        "planets" => \App\Models\Planet::class,
        "people" => \App\Models\People::class,
        "species" => \App\Models\Specie::class
    ],

    "alias" => [
        "characters" => ["people", \App\Models\People::class],
        "pilots" => ["people", \App\Models\People::class],
        "homeworld" => ["planets", \App\Models\Planet::class],
    ],

    "urls" => [
        "films" => "/api/films/",
        "vehicles" => "/api/vehicles/",
        "starships" => "/api/starships/",
        "planets" => "/api/planets/",
        "people" => "/api/people/",
        "species" => "/api/species/",
    ]
];
