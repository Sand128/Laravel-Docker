<?php

namespace App\Http\Controllers;

use App\Models\Programa;

class ProgramController extends Controller
{
    public function index() {
        $programas = Programa::orderBy('hora_inicio')->get();
        return view('programacion.index', compact('programas'));
    }
}
