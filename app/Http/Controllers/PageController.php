<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function quienesSomos() {
        return view('quienes-somos');
    }

    public function nuestrosProductos() {
        return view('nuestros-productos');
    }

    public function dondeEstamos() {
        return view('donde-estamos');
    }

    public function nuestrosClientes() {
        return view('nuestros-clientes');
    }
}

#namespace App\Http\Controllers;

#use Illuminate\Http\Request;

#class PageController extends Controller

#{
    //
#}
