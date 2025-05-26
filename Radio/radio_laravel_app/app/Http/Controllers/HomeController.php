<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $currentSong = 'Título actual desde API de radio';
        return view('home.index', compact('currentSong'));
    }
}
