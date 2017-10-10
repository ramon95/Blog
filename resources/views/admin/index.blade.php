@extends('admin.template.main')
@section('title','Inicio')
@section('content')
    <h1>Bienvenidos al panel de administrador</h1>
    <hr>
    <a href="{{ route('articles.create') }}">Crear un nuevo articulo</a>
    |
    <a href="{{ route('tags.create') }}">Crear un nuevo tag</a>
@endsection
