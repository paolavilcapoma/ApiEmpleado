<?php

use App\Http\Controllers\v1\EmpleadoControllers;
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

Route::get("/empleado",[EmpleadoControllers::class,"obtenerLista"]);
Route::get("/empleado/{id}",[EmpleadoControllers::class,"obtenerItem"]);
Route::post("/empleado",[EmpleadoControllers::class,"create"]);
Route::put("/empleado",[EmpleadoControllers::class,"update"]);
Route::patch("/empleado",[EmpleadoControllers::class,"patch"]);
Route::delete("/empleado/{id}",[EmpleadoControllers::class,"delete"]);