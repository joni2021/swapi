<?php
use App\Http\Controllers\Api\SpecieController;

Route::group(["prefix" => "/species"], function(){

    Route::get("/",[SpecieController::class,"list"]);

    Route::group(["prefix" => "/{id}"], function(){
        Route::get("/",[SpecieController::class,"show"]);
    });
});
