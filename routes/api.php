<?php

use Illuminate\Http\Request;
//Rotas do Artista
Route::get('artista/salvar', 'ArtistaController@salvar');
Route::get('artista/atualizar', 'ArtistaController@atualizar');
Route::get('artista/listar', 'ArtistaController@listar');
Route::get('artista/excluir', 'ArtistaController@excluir');
//Route::get('artista')
//Rotas do Genero
Route::get('genero/salvar', 'GeneroController@salvar');
Route::get('genero/atualizar', 'GeneroController@atualizar');
Route::get('genero/listar', 'GeneroController@listar');
Route::get('genero/excluir', 'GeneroController@excluir');
//Rotas do Disco
Route::get('disco/salvar', 'DiscoController@salvar');
Route::get('disco/atualizar', 'DiscoController@atualizar');
Route::get('disco/listar', 'DiscoController@listar');
Route::get('disco/excluir', 'DiscoController@excluir');
