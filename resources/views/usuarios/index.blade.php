@extends('layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Usuarios</h1>
  <p class="lead">Registro de usuarios</p>
  <hr class="my-4">
 
  <a class="btn btn-primary btn-lg" href="{{ route('usuarios.create')}}" role="button">Nuevo registro</a>
</div>

@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuarios</th>
      <th scope="col">acciones</th>      
    </tr>
  </thead>
  <tbody>
  	@foreach($usuarios as $xusuarios)
    <tr>
      <th><a class="btn btn-primary btn-lg" href="{{ route('usuarios.show',$xusuarios->id)}}" role="button">{{ $xusuarios->id }}</a></th>
      <td>{{ $usuarios->nombre }}</td>
      <td><a class="btn btn-warning btn-lg" href="{{ route('usuarios.edit',$xusuarios->id)}}" role="button">modificar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $usuarios->links() }}
@endsection