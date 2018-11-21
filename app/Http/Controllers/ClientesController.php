<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index (){
        return view('clientes.lista');
    }
    public function novo (){
        return view('clientes.formulario');
    }
    public function salvar (Request $request ){
        $cliente = new Cliente();
        $cliente = $cliente->create($request->all());

        return $cliente;


    }
}
