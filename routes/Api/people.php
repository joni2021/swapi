<?php

use App\Http\Controllers\Api\PeopleController;

Route::group(["prefix" => "/people"], function(){

    Route::get("/",[PeopleController::class,"list"]);

    Route::group(["prefix" => "/{id}"], function(){
        Route::get("/",[PeopleController::class,"show"]);

    });
});
