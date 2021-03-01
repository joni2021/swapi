<?php

namespace App\Models;

use App\Http\Traits\StockManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Transport extends Base
{
    use HasFactory,StockManager;


    protected $appends = ["pilots","films"];

    protected $hidden = ["id","film","people"];

    /**
     * @var array Nombres de los campos a filtrar
     */
    protected $filter = ["name","model"];

    /*
     * Relaciones
     */
    public function film()
    {
        return $this->belongsToMany(Film::class);
    }

    public function people()
    {
        return $this->belongsToMany(People::class);
    }


    /*
     * Muttators
     */

    public function getFilmsAttribute()
    {
        return $this->film->pluck("url");
    }


    public function getPilotsAttribute()
    {
        return $this->people->pluck("url");
    }

}
