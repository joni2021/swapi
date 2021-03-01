<?php


namespace App\Models;

use App\Http\Traits\StockManager;

class Starship extends Transport
{

    protected $fillable = ["name", "model","starship_class","manufacturer","cost_in_credits", "length","crew","passengers","max_atmosphering_speed","hyperdrive_rating","MGLT", "cargo_capacity","consumables","count"];



}
