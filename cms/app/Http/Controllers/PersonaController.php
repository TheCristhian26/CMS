<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
        public function GetPersona(){
            $persona=Persona::all();
            return view("paginas.persona",array("persona"=>$persona));
        }

        public function buscar(Request $request) {
            $palabra = $request->get('palabra');

            $personas = Persona::where('nombre','like',$palabra)->get();
            
        }
}
