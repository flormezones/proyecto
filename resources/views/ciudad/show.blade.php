@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
    {{ $ciudad->nombre }}
  </div>
  <div class="card-body">
    <h5 class="card-title">Registro creado el {{$ciudad->updated_at}} </h5>
    <p class="card-text">Registro fue creado el {{$ciudad->updated_at}} </p>
    <a href="{{ route('ciudad.index')}}" class="btn btn-primary">Volver</a>
  </div>
</div>



@endsection