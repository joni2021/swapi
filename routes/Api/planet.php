<?php
use App\Http\Controllers\Api\PlanetController;

Route::group(["prefix" => "/planets"], function(){

    Route::get("/",[PlanetController::class,"list"]);

    Route::group(["prefix" => "/{id}"], function(){
        Route::get("/",[PlanetController::class,"show"]);

    });
});
