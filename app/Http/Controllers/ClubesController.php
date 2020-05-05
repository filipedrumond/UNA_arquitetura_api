<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Model\Clubes;
use Illuminate\Http\Request;

class ClubesController extends Controller
{
    public function getAll()
    {
        $lsClubes = Clubes::all();
        return $lsClubes;
    }

    public function getById(Request $request){
        $clube = Clubes::find($request->id);
        return $clube;
    }

    public function create(Request $request){

        $clube = new Clubes();
        $clube->nome = $request->nome;
        $clube->nomeReduzido = $request->nomeReduzido;
        $clube->sigla = $request->sigla;
        $clube->anoFundacao = $request->anoFundacao;
        $clube->save();

        return $clube->latest('id')->first();
    }

    public function update(Request $request){

        $clube = Clubes::find($request->id);
        if(!$clube){
            return False;
        }
        $clube->nome = $request->nome;
        $clube->nomeReduzido = $request->nomeReduzido;
        $clube->sigla = $request->sigla;
        $clube->anoFundacao = $request->anoFundacao;
        $clube->save();

        return Clubes::find($request->id);
    }

    public function delete(Request $request){
        $clube = Clubes::find($request->id);

        $result = False;
        if($clube != null){
            $result = $clube->delete();
        }
        if($result){
            return '“Registro excluído com sucesso!”';
        }
        return '“Não foi possível realizar a exclusão do registro!”;';

    }
}
