<?php

use App\Http\Controllers\v1\EmpleadoControllers;
use App\Http\Controllers\v1\CargoControllers;
use App\Http\Controllers\v1\UserControllers;
use App\Http\Controllers\v1\SeguridadCOntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group (function(){

    Route::get("/empleado",[EmpleadoControllers::class,"obtenerLista"]);
    Route::get("/empleado/{id}",[EmpleadoControllers::class,"obtenerItem"]);
    Route::post("/empleado",[EmpleadoControllers::class,"create"]);
    Route::put("/empleado",[EmpleadoControllers::class,"update"]);
    Route::patch("/empleado",[EmpleadoControllers::class,"patch"]);
    Route::delete("/empleado/{id}",[EmpleadoControllers::class,"delete"]);
    
    Route::get("/cargo",[CargoControllers::class,"obtenerLista"]);
    Route::get("/cargo/{id}",[CargoControllers::class,"obtenerItem"]);
    Route::post("/cargo",[CargoControllers::class,"create"]);
    Route::put("/cargo",[CargoControllers::class,"update"]);
    Route::patch("/cargo",[CargoControllers::class,"patch"]);
    Route::delete("/cargo/{ids}",[CargoControllers::class,"delete"]);
    
    Route::post("/user",[UserControllers::class,"store"]);

});

Route::post("/seguridad",[SeguridadCOntroller::class,"store"]);