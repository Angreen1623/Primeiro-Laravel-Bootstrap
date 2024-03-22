<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ControllerCliente extends Controller
{
    public function index(Request $req){
        $cliente = Cliente::all();
        return view('index')->with("cliente", $cliente);
    }

    public function adicionar(Request $req){
        $cliente = new Cliente;
        $cliente->nome = $req->nome;
        $cliente->telefone = $req->telefone;
        $cliente->origem = $req->origem;
        $cliente->dadoContato = $req->dadoContato;
        $cliente->observacao = $req->observacao;

        $cliente->save();

        return redirect()->back();
    }
}
