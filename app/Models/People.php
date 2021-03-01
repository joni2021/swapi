<?php

namespace App\Models;

class People extends Base
{

    protected $fillable = ["name","birth_year","eye_color","gender","hair_color","height","mass","skin_color","specie_id", "planet_id"];

    protected $appends = ["films","starships","vehicles","species","homeworld"];

    protected $hidden = ["id","film","starship","vehicle","specie", "specie_id","planet"];

    /*
     * Relaciones
     */
    public function film()
    {
        return $this->belongsToMany(Film::class);
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

    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }

    /*
     * Muttators
     */

    public function getFilmsAttribute()
    {
        return $this->film ? $this->film->pluck("url") : [];
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
        return $this->specie ? $this->specie->pluck("url") : [];
    }

    public function getHomeworldAttribute()
    {
        return $this->planet ? $this->planet->pluck("url") : [];
    }


}
