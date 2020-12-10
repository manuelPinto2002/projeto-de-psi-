@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')

ID: {{$vendedor->id_vendedor}}<br>
Nome: {{$vendedor->nome}}<br>
Especialidade: {{$vendedor->especialidade}}<br>
Email: {{$vendedor->email}}<br>


@endsection
