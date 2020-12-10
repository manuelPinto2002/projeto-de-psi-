<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;


class EncomendasController extends Controller
{

 public function index(){

     $encomendas =Encomenda::paginate(8);

       return view('encomendas.index', ['encomendas'=>$encomendas]);

}

public function show (Request $request){
    $idEncomenda=$request->id;


	$encomenda=Encomenda::where('id_encomenda',$idEncomenda)->first();



    return view('encomendas.show',  ['encomenda'=>$encomenda]);
}


}