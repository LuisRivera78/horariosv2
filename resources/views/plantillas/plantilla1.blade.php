<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    {{--@dd($alumnos)--}}

        <a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nuevo</a>
        <div
            class="table-responsive-sm"
        >
            <table
                class="table table-striped table-hover table-borderless table-primary align-middle"
            >
                <thead class="table-light">
                    <caption>
                        Catalogo Alumnos 
                    </caption>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($alumnos as $alumno)
                    
                    <tr
                        class="table-primary"
                    >
                        <td scope="row">{{$alumno->id}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellidop}}</td>
                        <td>{{$alumno->Email}}</td>
                        <td><a href="{{route('alumnos.edit' , $alumno->id)}}" class="btn button btn-primary">Editar</td>
                        <td><a href="{{route('alumnos.destroy', $alumno->id)}}" class="btn button btn-primary">Eliminar</td>
                        <td><a href="{{route('alumnos.show', $alumno->id)}}" class="btn button btn-primary">Ver</td>
                    </tr>
                   @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
            </table>
        </div>
</body>
</html>