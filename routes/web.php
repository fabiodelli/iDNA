<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/// Definizione della route per la homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Definizione della route per il salvataggio dei dati del form via AJAX
Route::post('/salva-dati', [FormController::class, 'salvaDati'])->name('form.salvaDati');

// Definizione della route per lo SliderController
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');


