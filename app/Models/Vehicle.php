<?php

namespace App\Models;

use App\Http\Traits\StockManager;
use Illuminate\Support\Facades\URL;

class Vehicle extends Transport
{

    protected $fillable = ["name","model","vehicle_class", "manufacturer", "length", 'cost_in_credits', "crew", "passengers", "max_atmosphering_speed", "cargo_capacity", "consumables", "count"];

}
