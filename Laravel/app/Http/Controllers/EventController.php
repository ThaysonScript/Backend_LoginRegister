<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

    public function register() {
        return view('/register');
    }

    public function login() {
        return view('/login');
    }

    public function logado() {
        return view('/logado');
    }

    public function project_cadastrado() {

        return view('/projetos');
    }
}
