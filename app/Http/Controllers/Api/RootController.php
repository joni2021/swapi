<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class RootController extends Controller
{
    /**
     * Directorio root de la api
     */
    public function index()
    {
        $routes = [];
        foreach(config("swapi.urls") as $name => $route){
            $routes[$name] = URL::asset($route);
        }

        return response()->json($routes,200);
    }
}
