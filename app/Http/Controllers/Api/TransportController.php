<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Starship;
use App\Models\Vehicle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class TransportController extends Controller
{


    /**
     * TransportController constructor.
     *
     * @param Route $route
     * @param Request $request
     */
    public function __construct(Route $route, Request $request)
    {

        $this->middleware("checkTransport:". $route->parameter("transport"));

        parent::__construct($route, $request);

        $model = $this->checkTransport();

        $this->model = $model;

    }



    /**
     * Obtener la cantidad de naves
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCount()
    {
        $model = $this->asignModel($this->model);

        if($model instanceof JsonResponse)
        {
            return $model;
        }

        return response()->json(["results" => ["count" => $this->model->getCount()]],200);
    }


    /**
     * Setear la cantidad de naves en X cantidad
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function setCount()
    {
        return $this->updateCount($this->model,"setCount");
    }

    /**
     * Aumentar la cantidad de vehiculos en X cantidad
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addCount()
    {
        return $this->updateCount($this->model,"addCount");
    }

    /**
     * Disminuir la cantidad de naves en X cantidad
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function subCount()
    {
        return $this->updateCount($this->model,"subCount");
    }


    /**
     * Actualización del valor del contador a partir de una acción pasada
     *
     * @param $model
     * @param string $action
     * @param array|null[] $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected  function updateCount($model, string $action, array $message = ["success" => null, "error" => null])
    {
        $this->asignModel($model);

        $count = $this->route->parameter("value");

        if(!method_exists($this,$action))
            return response()->json(["response" => "Método no encontrado", "status" => "error"]);

        $this->model->$action($count);

        if($this->model->save()){
            return response()->json(["message" => $message["success"] ?? "Se modificó correctamente la cantidad","status" => "ok"],200);
        }

        return response()->json(["message" => $message["error"] ?? "No se pudo modificar la cantidad","status" => "error"],200);
    }



    /**
     * Chequeo del tipo de transporte solo válidos "vehicles"|"starship"
     *
     * @return JsonResponse|Vehicle|Starship
     */
    public function checkTransport()
    {
        $parameter = $this->route->parameter("transport");

        if($parameter != "vehicles" && $parameter != "starships"){

            return response()->json(["response" => "La ruta a la que quiere acceder no existe", "status" => "error"],200);
        }

        $transport = config("swapi.endpoints.$parameter");

        return new $transport;
    }
}
