<?php
use App\Http\Controllers\Api\FilmController;

Route::group(["prefix" => "/films"], function(){

    Route::get("/",[FilmController::class,"list"]);

    Route::group(["prefix" => "/{id}"], function(){
        Route::get("/",[FilmController::class,"show"]);

    });
});
