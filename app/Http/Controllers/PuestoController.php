<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Database\Seeders\PuestoSeeder;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public $puestos;

    public function __construct(){
        $this->puestos = Puesto::paginate(5);
    
    }

    public function index()
    {
        $puestos= Puesto::get();
        //return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("puestos.index",compact("puestos"));
    }
    public function create()
    {
        return view("puestos/create");
    }
    public function store(Request $request)
    {
       // return $request->all();
        Puesto::create($request->all());
        return redirect()->route ("puestos.index");
    }
    public function show(Puesto $puestos)
    {
        return view("puestos/show");
    }
    public function edit(Puesto $puestos)
    {

        return view("puestos.edit" , ["puestos"=>$this->puestos,"puesto"=>$puestos]);
 
    }
    public function update(Request $request, Puesto $puesto)
    {
        $puesto->update($request->all());
       return redirect()->route ("puestos.index");
    }
    public function destroy(Puesto $puesto)
    {
        
        return view("puestos/destroy");
    }
}
