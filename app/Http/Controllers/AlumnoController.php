<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Database\Seeders\AlumnoSeeder;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $alumnos;

    public function __construct(){
        $this->alumnos = Alumno::paginate(5);
    
    }

    public function index()
    {
        $alumnos= Alumno::get();
        //return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("alumnos2/index",compact("alumnos"));
    }
    public function create()
    {

        return view("alumnos2.formulario" , ["alumnos"=>$this->alumnos, "accion"=>"Nuevo", "des"=>""]);
    }
    public function store(Request $request)
    {
       // return $request->all();
       $request -> validate([' nombre ' => ['min:3','max:50','regex:/^[\p{L} ]+$/u','required'], 'apellidop' => ' required', 'email' => 'required']);
        Alumno::create($request->all());
        return redirect()->route ("alumnos.index");
    }
    public function show(Alumno $alumno)
    {
        return view("alumnos2/formulario", ["alumnos"=>$this->alumnos,"alumno"=>$alumno, "accion"=>"Mostrar", "des"=>"disabled"]);
    }
    public function edit(Alumno $alumno)
    {

        return view("alumnos2.formulario" , ["alumnos"=>$this->alumnos,"alumno"=>$alumno, "accion"=>"Editar", "des"=>""]);
 
    }
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
       return redirect()->route ("alumnos.index");
    }
    public function destroy(Alumno $alumno)
    {
        
        return view("alumnos2/destroy");
    }
}
