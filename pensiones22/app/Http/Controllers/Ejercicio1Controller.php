<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function Ejercicio1(){
        return view ('Ejercicio1.Ejercicio1');
        
    }
    public function resultado_ejercicio1(Request $request){
        $numero1= $request->numero1;
        for ($i=1; $i <=10; $i++) {
            $resultado=$i*$numero1;
            echo'<br>';
            echo $i,'x', $numero1,'=',$resultado;
        }
        return view ('Ejercicio1.resultadoejercicio1', compact('numero1'));
    }
}
