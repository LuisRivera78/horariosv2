@extends('plantilla.plantilla1')
 
@section('contenido1')
    @include('alumnos.tablahtml')
@endsection
 
@section('contenido2')
    <h1>Ingresar Datos</h1>
    <div class="container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    
        <form action="{{route('alumnos.store' ,$alumno->id)}}" method="POST">
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno" value="{{@old('nombre')}}">
            </div>
            @error('nombre')
                <p> Error en el nombre: {{$message}}</p>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="apellidop" class="col-4 col-form-label">Apellido Paterno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Apellido del alumno" value="{{@old('apellidop')}}">
            </div>
        </div>
        @error('apellidop')
            <p> Error en el Apellido Paterno: {{$message}}</p>
        @enderror
    </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{@old('email')}}">
            </div>
        </div>
        @error('email')
            <p> Error en el Email: {{$message}}</p>
        @enderror
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
