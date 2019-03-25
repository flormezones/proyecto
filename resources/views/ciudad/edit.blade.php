@extends('layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Modulo de ciudades</h1>
  <p class="lead">Aqui podran cargar las ciudades que se usaran en el sistema.</p>
  <hr class="my-4">
  <p>Esto es solo para administradores.</p>
  <a class="btn btn-primary btn-lg" href="ciudad.index" role="button">Volver</a>
</div>

<form action="{{ route('ciudad.update',$ciudad->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de la ciudad</label>
    <input type="text" name="nombre" value="{{ $ciudad->nombre }}" class="form-control" id="nombre" placeholder="Ciudad">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection