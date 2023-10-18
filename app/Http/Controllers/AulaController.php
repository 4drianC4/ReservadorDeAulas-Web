<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Aula;

class AulaController extends Controller
{
    //
    public function index()
    {
        $consulta = Aula::all();
        //return $consulta;
        //return view('homePageUser');
        return view('homePageUser')->with('consulta', $consulta);
    }

    public function create(){
        $consulta2 = Aula::all();
        //return $consulta;
        //return view('homePageUser');
        return view('homePageAdmin')->with('consulta2', $consulta2);
    }

    public function store(Request $request){
        $aula = new Aula();
        $aula->nombre = $request->nombre;
        $aula->ubicacion = $request->ubicacion;
        $aula->capacidad = $request->capacidad;
        $aula->tipo = $request->tipo;
        $aula->descripcion = $request->descripcion;
        $aula->estado = $request->estado;
        $aula->save();
        //return redirect()->route('reservaAula.index');
        $consulta2 = Aula::all();
        return view('homePageAdmin')->with('consulta2', $consulta2);
    }

    public function show($id){
        $aula = Aula::find($id);
        return view('mostrarHorario',compact('aula'));
    }

    public function edit($id){
        $aula = Aula::find($id);
        return view('editarAula',compact('aula'));
    }

    public function update(Request $request, $id){
        $aula = Aula::find($id);
        $aula->nombre = $request->nombre;
        $aula->ubicacion = $request->ubicacion;
        $aula->capacidad = $request->capacidad;
        $aula->tipo = $request->tipo;
        $aula->descripcion = $request->descripcion;
        $aula->estado = $request->estado;
        $aula->save();
        return redirect()->route('reservaAula.index');
    }

    public function destroy($id){
        $aula = Aula::find($id);
        $aula->delete();
        return redirect()->route('reservaAula.index');
    }
}