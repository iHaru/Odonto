<?php

namespace App\Http\Controllers\email;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class email extends Controller
{
    public function enviar(Request $req) {
        $dados = $req -> all();

        Mail::send('emailenviar', $dados, function ($message) use ($dados) {
            $message -> to('ninjaakats@gmail.com')
            -> subject($dados['nome'] . ' entrou em contato com você através do site');
        });

        return redirect() -> route('emailenviado');
    }

    public function enviado() {
        return view('emailenviado');
    }


}
