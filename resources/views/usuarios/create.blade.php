@extends('layout')

    @section('content')

    <div class="jumbotron">
      <h1 class="display-4">Registro de usuarios</h1>
      <p class="lead">Registrate para publicar tus postes y ver sus comentarios</p>
      <hr class="my-4">
      
      <a class="btn btn-primary btn-lg" href="usuarios.index" role="button">Volver</a>
    </div>

    <form action="{{ route('usuarios.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Correo electronico</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Correo electronico">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="exampleInputEmail1">Edad</label>
        <input type="text" name="edad" class="form-control" id="edad" placeholder="Edad">
      </div>
      
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection