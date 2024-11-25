<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ActorPeliculaController;
use App\Http\Controllers\AlquilerController;

Route::resource('sexo', SexoController::class);
Route::resource('socio', SocioController::class);
Route::resource('genero', GeneroController::class);
Route::resource('formato', FormatoController::class);
Route::resource('director', DirectorController::class);
Route::resource('actor', ActorController::class);
Route::resource('pelicula', PeliculaController::class);
Route::resource('actor_pelicula', ActorPeliculaController::class);
Route::resource('alquiler', AlquilerController::class);


Route::get('/', function () {
    return view('welcome');
});
