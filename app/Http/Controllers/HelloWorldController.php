<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello($name, Request $request)
    {
        $dados = [
            'nome' => 'Exemplo',
            'idade' => 25,
            'email' => 'exemplo@example.com',
            'oi' => $request->all()
        ];
        return response()->json($dados);
    }
}
