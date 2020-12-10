<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda_produto;


class Encomendas_produtosController extends Controller
{

 public function index(){

     $encomendas_produtos =Encomenda_produto::paginate(8);

       return view('encomendas_produtos.index', ['encomendas_produtos'=>$encomendas_produtos]);

}

public function show (Request $request){
    $idEncomenda_produto=$request->id;


	$Encomenda_produto=Encomenda_produto::where('id_Enc_prod',$idEncomenda_produto)->first();



 return view('encomendas_produtos.show',  ['encomenda_produto'=>$encomenda_produto]);
}


}