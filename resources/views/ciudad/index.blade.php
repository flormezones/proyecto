@extends('layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Modulo de ciudades</h1>
  <p class="lead">Aqui podran cargar las ciudades que se usaran en el sistema.</p>
  <hr class="my-4">
  <p>Esto es solo para administradores.</p>
  <a class="btn btn-primary btn-lg" href="{{ route('ciudad.create')}}" role="button">Nuevo registro</a>
</div>

@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de la ciudad</th>
      <th scope="col">acciones</th>      
    </tr>
  </thead>
  <tbody>
  	@foreach($ciudad as $xciudad)
    <tr>
      <th><a class="btn btn-primary btn-lg" href="{{ route('ciudad.show',$xciudad->id)}}" role="button">{{ $xciudad->id }}</a></th>
      <td>{{ $xciudad->nombre }}</td>
      <td><a class="btn btn-warning btn-lg" href="{{ route('ciudad.edit',$xciudad->id)}}" role="button">modificar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $ciudad->links() }}
@endsection