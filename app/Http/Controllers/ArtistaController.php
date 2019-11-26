<?php

namespace App\Http\Controllers;

use App\Model\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function getArtistaId(Request $request)
    {
        return Artista::where('id', $request->input('id'))->first();
    }

    public function listar()
    {
        return Artista::get();
    }

    public function salvar(Request $request)
    {
        $artista = new Artista();
        $artista->nome = $request->input('nome');
        $artista->nome_artistico = $request->input('nome_artistico');
        $artista->nome_banda = $request->input('nome_banda');
        $artista->save();
    }

    public function atualizar(Request $request)
    {
        $artista = Artista::find($request->input('id'));
        $artista->nome = $request->input('nome');
        $artista->nome_artistico = $request->input('nome_artistico');
        $artista->nome_banda = $request->input('nome_banda');
        $artista->save();
    }

    public function excluir(Request $request)
    {
        $artista = Artista::find($request->input('id'));
        $artista->delete();
    }

}
