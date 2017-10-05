@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')
  <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar nuevo articulo</a>
  <!-- Buscador de Articles-->
		{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Buscar Articulo...', 'aria-describedby' => 'search']) !!}
				<span class="input-group-addon" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</span>
			</div>
		{!! Form::close() !!}
	<!-- Fin del buscador-->
  <hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
      <th>Usuario</th>
      <th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title}}</td>
          <td>{{ $article->category->name}}</td>
          <td>{{ $article->user->name}}</td>
					<td>
						<a href="#" class="btn btn-warning">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="#" onclick="return confirm('Seguro que desea eliminarlo?')" class="btn btn-danger">
							<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection
