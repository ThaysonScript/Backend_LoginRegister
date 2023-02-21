<?php

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

use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [EventController::Class, 'register']);

Route::get('/login', [EventController::Class, 'login']);

Route::get('/logado', [EventController::Class, 'logado']);

Route::get('/projetos', [EventController::class, 'project_cadastrado']);