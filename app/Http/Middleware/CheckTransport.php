<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CheckTransport
{


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  $vehicle
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $vehicle)
    {

        if($vehicle != "vehicles" && $vehicle != "starships"){

            return response()->json(["response" => "La ruta a la que quiere acceder no existe", "status" => "error"],404);
        }

        return $next($request);
    }
}
