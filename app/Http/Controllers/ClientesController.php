<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClientesController extends Controller
{

 public function index(){

     $clientes = Cliente::all()->sortbydesc('nome');;

       return view('clientes.index', ['clientes'=>$clientes]);

}

public function show (Request $request){
    $idCliente=$request->id;


    $cliente=Cliente::where('id_cliente', $idCliente)->with(['encomendas','produtos','Encomendas_produtos'])->first();

    return view('clientes.show',  ['cliente'=>$cliente]);
}



}