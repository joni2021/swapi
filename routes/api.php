<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RootController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/",[RootController::class,"index"]);


/*
 * Carga de archivos de rutas
 */

$dir = opendir(__DIR__ . "/Api");

while($routes = readdir($dir)){
    if($routes == "." || $routes == "..") continue;

    require_once(__DIR__ . "/Api/$routes");
}
