<?php

namespace App\Http\Controllers;

use App\Model\Artista;
use App\Model\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function getGeneroId(Request $request)
    {
        return Genero::where('id', $request->input('id'))->first();
    }

    public function listar()
    {
        return Genero::get();
    }

    public function salvar(Request $request)
    {
        $genero = new Genero();
        $genero->nome = $request->input('nome');
        $genero->save();
    }

    public function atualizar(Request $request) {
        $genero = Genero::find($request->input('id'));
        $genero->nome = $request->input('nome');
        $genero->save();
    }

    public function excluir(Request $request) {
        Genero::where('id', $request->input('id'))->delete();
    }

}
