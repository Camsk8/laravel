<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function Ejercicio2(){
        return view('Ejercicio2.Ejercicio2');
    }
    public function resultado_Ej2(Request $request){

        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $numero3 = $request->numero3;
        $suma=$numero1+$numero2;
        if($suma==$numero3){
            $respuesta='iguales';
        }else{
            $respuesta = 'Distintas';
        }
        return view('Ejercicio2.resultado_Ejercicio2', compact('respuesta'));
    }
}
