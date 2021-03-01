<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SpecieController extends Controller
{

    public function __construct(Route $route, Request $request, Specie $specie)
    {

        $this->model = $specie;
        parent::__construct($route, $request);
    }
}
