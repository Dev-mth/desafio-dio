<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function getAll()
    {
        $times = $this->getTimes();

        return response()->json($times);
    }

    public function getById($id)
    {
        $time = null;

        foreach ($this->getTimes() as $_time) {
            if ($_time['id'] == $id) {
                $time = $_time;
            }
        }

        //Verificar se existe e retornar
        return $time ? response()->json($time): abort(404);

    }

    public function getTimesByEstado($estado)
    {
        $times = [];

        foreach ($this->getTimes() as $_time) {
            if ($_time['estado'] == $estado) {
                $times[] = $_time;
            }
        }
        return response()->json($times);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id' => 'numeric',
            'nome' => 'required|min:4'
        ]);

        return response()->json($request->all());
    }

    protected function getTimes() {

        return[
            [
                'id' => 1, 'nome' => 'Flamengo', 'estado' => 'Rio de Janeiro'
            ],
            [
                'id' => 2, 'nome' => 'Palmeiras', 'estado' => 'Sao Paulo'
            ],
            [
                'id' => 3, 'nome' => 'Santos', 'estado' => 'Sao Paulo'
            ],
            [
                'id' => 4, 'nome' => 'Fluminense', 'estado' => 'Rio de janeiro'
            ],
            [
                'id' => 5, 'nome' => 'Cruzeiro', 'estado' => 'Minas Gerais'
            ],
        ];

    }
}
