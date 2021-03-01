<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PlanetController extends Controller
{

    public function __construct(Route $route, Request $request, Planet $planet)
    {
        $this->model = $planet;
        parent::__construct($route, $request);
    }

}
