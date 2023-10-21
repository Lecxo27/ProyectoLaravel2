<?php

use App\Http\Controllers\EnemigosController;
use App\Http\Controllers\JefesController;
use App\Http\Controllers\ObjetosController;
use App\Http\Controllers\PersonajesController;
use App\Http\Controllers\TrinketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/objetos',[ObjetosController::class,'index']);
Route::post('/objetos',[ObjetosController::class,'store']);

Route::get('/Jefes',[JefesController::class,'index']);
Route::post('/Jefes',[JefesController::class,'store']);

Route::get('/Personajes',[PersonajesController::class,'index']);
Route::post('/Personajes',[PersonajesController::class,'store']);

Route::get('/Trinkets',[TrinketsController::class,'index']);
Route::post('/Trinkets',[TrinketsController::class,'store']);

Route::get('/Enemigos',[EnemigosController::class,'index']);
Route::post('/Enemigos',[EnemigosController::class,'store']);

//  trinkets, personajes, pisos CHECK


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
