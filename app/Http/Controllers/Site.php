<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function home() {
        return view('home');
    }

    public function clinica() {
        return view('clinica');
    }

    public function servicos() {
        return view('servicos');
    }

    public function galeria() {
        return view('galeria');
    }

    public function contato() {
        return view('contato');
    }
}
