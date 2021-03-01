<?php

namespace App\Models;


use Illuminate\Support\Facades\URL;

class Film extends Base
{

    protected $fillable = ["title", "episode_id","opening_crawl","director","producer","release_date"];


    protected $appends = ["planets","starships","vehicles","species","characters"];

    protected $hidden = ["id","planet","starship","vehicle","specie", "people"];

    /**
     * @var string Nombre del campo a filtrar
     */
    protected $filter = "title";


    /*
     * Relaciones
     */

    public function planet()
    {
        return $this->belongsToMany(Planet::class);
    }

    public function starship()
    {
        return $this->belongsToMany(Starship::class);
    }

    public function vehicle()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }

    public function people()
    {
        return $this->belongsToMany(People::class);
    }

    /*
     * Muttators
     */

    public function getPlanetsAttribute()
    {
        return $this->planet ? $this->planet->pluck("url") : [];
    }

    public function getStarshipsAttribute()
    {
        return $this->starship ? $this->starship->pluck("url") : [];
    }

    public function getVehiclesAttribute()
    {
        return $this->vehicle ? $this->vehicle->pluck("url") : [];
    }


    public function getSpeciesAttribute()
    {
        return $this->specie ?? [];
    }

    public function getCharactersAttribute()
    {

        return $this->people ? $this->people->pluck("url") : [];
    }

}

