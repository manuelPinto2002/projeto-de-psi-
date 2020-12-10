@extends('layout')
@section('nav')
@endsection
@section('conteudolink')
<hr/>
<h1>Clientes</h1>
ID: {{$cliente->id_cliente}}<br>
Nome: {{$cliente->nome}}<br>
morada: {{$cliente->morada}}
<hr/>
<h1>Encomendas</h1>

@if(count($cliente->encomendas)>0)
@foreach($cliente->encomendas as $encomenda)
Oberservações: {{$encomenda->observacoes}}<br>
Data: {{$encomenda->data}}<br>
@endforeach
@else
<div class="alert alert-danger" role='alert'>
	sem encomendas
</div>
@endif
<hr/>
@section('tproduto')

<h1>Produtos</h1>
@endsection
@section('produto')

@if(count($cliente->produtos)>0)
@foreach($cliente->produtos as $produto)
{{$produto->designacao}}<br>
@endforeach
@else
<div class="alert alert-danger" role='alert'>
	sem produtos
</div>
@endif
<hr/>
@endsection
 @section('tquantidade')
 <h1>Quantidade</h1>
@endsection



@section('quantidade')

@if(count($cliente->encomendas_produtos)>0)
@foreach($cliente->encomendas_produtos as $encomenda_produto)
{{$encomenda_produto->quantidade}}<br>

@endforeach
@else
<div class="alert alert-danger" role='alert'>
	sem DADOS
</div>
@endif
<hr/>
@endsection

 @section('tpreco')
 <h1>Preço</h1>
@endsection

@section('preco')
@if(count($cliente->encomendas_produtos)>0)
@foreach($cliente->encomendas_produtos as $encomenda_produto)

Preço: {{$encomenda_produto->preco}}<br>
@endforeach
@else
<div class="alert alert-danger" role='alert'>
	sem DADOS
</div>
@endif
<hr/>
@endsection



@endsection






