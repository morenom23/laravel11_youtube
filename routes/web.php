<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "<center><h1>"."¡Welcome to the Home!"."<br>". " 
     -- Moreno 23 --"."</h1></center>";
});

Route::get("/post", function () {
    return "Aquí se mostraran todos los post...";
});

// Acceder de forma directa con el nombre asignado 
Route::get("/post/create/", function () {
    return "Aquí se mostrara un formulario para crear un post";
});


// Peticion de forma opcional guardad en la variable pasada como parametro
Route::get("/post/{post}", function ($post) { 
    return "Aquí se mostraran todos los {$post}";
});


