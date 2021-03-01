<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PeopleController extends Controller
{

    public function __construct(Route $route, Request $request, People $people)
    {
        $this->model = $people;
        parent::__construct($route, $request);
    }

}
