
@yield('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

@yield('nav')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('encomendas.index')}}">Encomendas</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link disabled" href="{{route('encomendas_produtos.index')}}">EncomendasProdutos</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="{{route('vendedores.index')}}">Vendedores</a>
						</li>
						
						<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					</ul>
					
					
				</div>
			</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				@yield('titulo')
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h3>
				@yield('conteudolink')
			</h3>
		</div>
		<div class="col-md-4">
		<img src="{{URL::to('img/foto2.png')}}" height="100%">
		</div>
	</div>
</div>





<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="align-content: left">
			 
			 @yield('tproduto')
			
		</div>
		<div class="col-md-4" style="align-content: center;">
			 
			 @yield('tquantidade')
		</div>
		<div class="col-md-4" style="align-content: right;">
			  @yield('tpreco')
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" style="align-content: left">
			 @yield('produto')
		</div>
		<div class="col-md-4" style="align-content: center;">
			 @yield('quantidade')
		</div>
		<div class="col-md-4" style="align-content: right;">
			 
				  @yield('preco')
		</div>
	</div>
</div>

			


			
			</div>
		</div>
	</div>
</div>

@yield('fim')


