<?php

namespace App\Models;

class Planet extends Base
{

    protected $fillable = ["name","diameter","rotation_period","orbital_period","gravity","population","climate","terrain","surface_water","url","created","edited"];

    protected $appends = ["residents","films"];

    protected $hidden = ["id","film","people"];



    /*
     * Relaciones
     */
    public function film()
    {
        return $this->belongsToMany(Film::class);
    }

    public function people()
    {
        return $this->hasMany(People::class);
    }


    /*
     * Muttators
     */

    public function getFilmsAttribute()
    {
        return $this->film->pluck("url");
    }


    public function getResidentsAttribute()
    {
        return $this->people->pluck("url");
    }


}
