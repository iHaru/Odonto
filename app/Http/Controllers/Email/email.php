<?php

namespace App\Http\Controllers\email;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class email extends Controller
{
    public function enviar(Request $req) {
        $dados = $req -> all();

        Mail::send('emailenviado', $dados, function ($message) use ($dados) {
            $message->from($dados['email'])
            -> to('matheus.m_c@hotmail.com')
            -> subject('Telefone: ' . $dados['telefone'] . ' Mensagem:' . $dados['mensagem']);
        });

        return redirect() -> route('emailenviado');
    }

    public function enviado() {
        return view('emailenviado');
    }


}
