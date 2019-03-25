@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
    {{ $usuarios->email }}
  </div>
  <div class="card-body">
    <h5 class="card-title">Registro creado el {{$usuarios->updated_at}} </h5>
    <p class="card-text">Registro fue creado el {{$usuarios->updated_at}} </p>
    <a href="{{ route('usuarios.index')}}" class="btn btn-primary">Volver</a>
  </div>
</div>



@endsection