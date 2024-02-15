<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Assicurati di usare il modello corretto per i tuoi slider

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all(); // Recupera tutti gli slider
        return view('homepage', compact('sliders')); // Passa i dati alla vista
    }
}

