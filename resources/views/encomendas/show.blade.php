@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')


ID_encomenda: {{$encomenda->id_encomenda}}<br>
ID_cliente: {{$encomenda->id_cliente}}<br>
ID_Vendedor: {{$encomenda->id_vendedor}}<br>
Data: {{$encomenda->data}}
@endsection