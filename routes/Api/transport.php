<?php

use App\Http\Controllers\Api\TransportController;

Route::group(["prefix" => "/{transport}"], function(){

    Route::get("/",[TransportController::class,"list"]);

    Route::group(["prefix" => "/{id}"], function(){
        Route::get("/",[TransportController::class,"show"]);

        Route::get("/count",[TransportController::class,"getCount"]);
        Route::put("/count/{value}", [TransportController::class,"setCount"]);
        Route::put("/add/{value}", [TransportController::class,"addCount"]);
        Route::put("/sub/{value}", [TransportController::class,"subCount"]);
    });
});
