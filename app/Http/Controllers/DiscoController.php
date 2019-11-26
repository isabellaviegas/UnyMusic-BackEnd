<?php

namespace App\Http\Controllers;

use App\Model\Artista;
use App\Model\Disco;
use App\Model\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscoController extends Controller
{
    public function listar(){
        return Disco::get();
    }

    public function salvar(Request $request)
    {
        $disco = new Disco();
        if(empty(Artista::where('id', $request->input('id_artista')))) {
           return "O artista selecionado não foi encontrado na base de dados.";
        }
        if(empty(Genero::where('id', $request->input('id_genero')))){
            return "O genero selecionado não foi encontrado na base de dados.";
        }
        $disco->id_artista = $request->input('id_artista');
        $disco->id_genero = $request->input('id_genero');
        $disco->nome_album = $request->input('nome_album');
        $disco->save();
    }

    public function atualizar(Request $request) {
        $disco = Disco::find($request->input('id'));
        if(empty(Artista::where('id', $request->input('id_artista')))) {
            return "O artista selecionado não foi encontrado na base de dados.";
        }
        if(empty(Genero::where('id', $request->input('id_genero')))){
            return "O genero selecionado não foi encontrado na base de dados.";
        }
        $disco->id_artista = $request->input('id_artista');
        $disco->id_genero = $request->input('id_genero');
        $disco->nome_album = $request->input('nome_album');
        $disco->save();
    }

    public function excluir(Request $request){
        Disco::where('id', $request->input('id'))->delete();
    }

}
