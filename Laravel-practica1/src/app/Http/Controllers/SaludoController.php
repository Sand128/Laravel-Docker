<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index (){
		//retunr views ('saludo');
		return view ('Saludo',['mensaje' => '¡Hola en Laravel!']);
	}
}
