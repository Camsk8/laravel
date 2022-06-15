<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function datosPersonales(){
        echo"DATOS PERSONALES"."<br>";
         echo "nombres :Federico Gutierrez"; 
    }
    public function estudios(){
        return view('estudios');
}
   public function numeros(){
       echo "Listado de numeros:"."<br>";
       for($i=1;$i<101;$i++){
           echo $i."<br>";
       }
   }
    }
   