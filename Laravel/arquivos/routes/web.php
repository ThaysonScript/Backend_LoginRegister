<?php

use App\Http\Controllers\ControllerRegistro;
use App\Http\Controllers\registro;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/registrar', function() {
    return view('registrar');
});

Route::post('/enviar', [ControllerRegistro::class, 'index']);