<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected Route $route;
    protected $id;
    protected $model;
    protected $search;
    protected $page;

    /**
     * Controller constructor
     *
     * @param Route $route
     * @param Request $request
     * @param Model|null $model
     */
    public function __construct(Route $route, Request $request)
    {
        $this->route = $route;
        $this->search = $request->query->get("search");
        $this->page = $request->query->get("page");

        if($route->hasParameter("id")){
            $this->id = $this->route->parameter('id');
        }

    }


    /**
     * Visualización del listado de los registros
     *
     * @return JsonResponse
     */
    public function list()
    {

        if($this->search)
            $transport = $this->model->filter($this->search)->paginate(10);
        else
            $transport = $this->model->paginate(10);

        if($this->page && $this->page > $transport->lastPage())
            return response()->json(["detail" => "Not found"], 404);


        return response()->json([
            "count" => $transport->total(),
            "next" => $transport->nextPageUrl(),
            "previus" => $transport->previousPageUrl(),
            "results" => $transport->items()
        ], 200);
    }


    /**
     * Visualización del detalle de un único registro
     *
     * @return JsonResponse
     */
    public function show()
    {
        $transport = $this->asignModel($this->model);

        if($transport instanceof JsonResponse){
            return $transport;
        }

        return response()->json(["results" => $this->model], 200);
    }



    /**
     * Busca la entidad por id y la asigna a la propiedad $model
     *
     * @param $model
     * @return JsonResponse
     */
    protected function asignModel($model){

        $entity = $model->find($this->id);

        if(!$entity){
            return response()->json(["response" => "No se encontró el id $this->id","status" => "error"],200);
        }

        $this->model = $entity;
    }


}
