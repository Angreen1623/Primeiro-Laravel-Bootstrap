<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ControllerCliente extends Controller
{
    public function index(Request $req){
        $cliente = Cliente::all();
        return view('listar')->with("cliente", $cliente);
    }

    public function adicionar(Request $req){
        $cliente =              new Cliente;
        $cliente->nome =        $req->nome;
        $cliente->telefone =    $req->telefone;
        $cliente->origem =      $req->origem;
        $cliente->dadoContato = $req->dadoContato;
        $cliente->observacao =  $req->observacao;

        $cliente->save();

        return redirect()->back();
    }

    public function editar(Request $req){
        $cliente = Cliente::find($req->id);
        return view('editar')->with("cliente", $cliente);
    }

    public function atualizar(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->update(
            [
            "nome" => $req->nome,
            "telefone" => $req->telefone,
            "origem" => $req->origem,
            "dadoContato" => $req->dadoContato,
            "observacao" => $req->observacao
            ]
            );
    }
}
