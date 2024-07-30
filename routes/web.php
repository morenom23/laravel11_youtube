<?php
// CLASE  EN BASE A LOS CONTROLADORES
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class,'index'] );

Route::get("/post",[PostController::class, 'index']);
Route::get("/post/create",[PostController::class, 'create']); // Acceder de forma directa con el nombre asignado 
Route::get("/post/{post}", [PostController::class,"show"]);// Peticion de forma opcional guardad en la variable pasada como parametro


Route::get('informacion/', [HomeController::class, 'informacion']);
Route::get('contacto', [HomeController::class,'contacto']);


