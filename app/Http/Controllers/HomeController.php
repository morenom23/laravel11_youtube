<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function informacion(){
        return "Informacion relevante: "."<br>"."<br>".
        "Nombre : Ezequiel Moreno"."<br>".
        "Cc: 1007245888"."<br>"."Email : moren@123.com "."<br>"."Password : 25458"."<br>".
        "Estudio : Desarrollo Web"."<br>".
        "Realizado en : ". date("D-Y-h") ."<br>";
    }

    public function contacto(){
        return "Datos del Usuario"."<br>".
        "Nombre : Juan Carlos"."<br>".
        "Apellido : Morales Mejia"."<br>".
        "Teléfono : 323845778"."<br>";
    }
}
