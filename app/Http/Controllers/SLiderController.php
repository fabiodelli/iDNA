<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Recupera tutti gli slider con le relative immagini
        $sliders = Slider::with('images')->get();

        // Passa gli slider alla vista
        return view('hopmepage.', compact('sliders'));
    }
}

