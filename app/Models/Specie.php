<?php

namespace App\Models;

class Specie extends Base
{

    protected $fillable = ["name","classification","designation","average_height","average_lifespan","eye_colors","hair_colors","skin_colors","language","created","edited"];


    protected $appends = ["people","films"];

    protected $hidden = ["id","film","person"];



    /*
     * Relaciones
     */
    public function film()
    {
        return $this->belongsToMany(Film::class);
    }

    public function person()
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


    public function getPeopleAttribute()
    {
        return $this->person->pluck("url");
    }

}
