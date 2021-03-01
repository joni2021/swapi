<?php

namespace App\Http\Controllers;

use App\Helpers\SwApi;
use App\Models\Film;
use App\Models\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Carga la pantalla de inicio con la documentación
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("welcome");
    }

    /**
     * Importación de los datos de SWApi
     *
     * @return JsonResponse
     */
    public function importData(SwApi $swApi)
    {


        $films = $swApi->getAll("films");

        foreach ($films as $f) {
            $f = json_decode(json_encode($f),true);
            $film = Film::create($f);

            foreach($f as $attr => $val){
                if(!in_array($attr, $film->getAttributes()))
                    $film->{$attr} = $val;
            }

            $film->relations($film);
        }



        $people = $swApi->getAll("people");

        foreach ($people as $p) {
            $p = json_decode(json_encode($p),true);

            $person = People::where("name","=",$p["name"]);
            if($person->count() == 0)
                $person = People::create($p);
            else
                $person = $person->first();

            foreach($p as $attr => $val){
                if(!in_array($attr, $person->getAttributes()))
                    $person->{$attr} = $val;
            }

            $person->relations($person);
        }

        return response()->json([true],200);
    }

}
