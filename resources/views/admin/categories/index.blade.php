@extends('admin.template.main')

@section('title', 'Listado de Categorias')

@section('content')
	<a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoria</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"> 
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a>
						<a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('Seguro que desea eliminarlo?')" class="btn btn-danger">
							<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $categories->render() !!}
	</div>
@endsection