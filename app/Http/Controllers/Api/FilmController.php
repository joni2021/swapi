<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class FilmController extends Controller
{

    public function __construct(Route $route, Request $request, Film $film)
    {
        $this->model = $film;
        parent::__construct($route, $request);
    }

}
