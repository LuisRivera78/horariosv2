@extends('plantilla.plantilla1')
 
@section('contenido1')
    @include('alumnos.tablahtml')
@endsection
 
@section('contenido2')
    <h1>Ingresar Datos</h1>
    <div class="container">
        <form action="{{route('alumnos.create' ,$alumno->id)}}" method="POST">
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno" disabled value="{{$alumno->nombre}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellidop" class="col-4 col-form-label">Apellido Paterno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Apellido del alumno" disabled value="{{$alumno->apellidop}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellidop" class="col-4 col-form-label">Tipo :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de Puesto" disabled value="{{$puesto->tipo}}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                        Confirmar Nuevo
                </button>
                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
       
    </form>
    </div>
@endsection
