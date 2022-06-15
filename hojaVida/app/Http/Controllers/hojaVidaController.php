<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hojaVidaController extends Controller
{
    public function vistaTemplete(){
        return view ('templete');

    }
    public function datosPersonales(){
        return view('hojaVida.datospersonales');
    }
    public function estudios(){
        return view ('hojaVida.estudios');
    }
    public function experiencias(){
        return view ('hojaVida.experiencias');
    }
    public function tablamultiplicar(){
        return view ('hojaVida.tablamultiplicar');
    }
}//End class
