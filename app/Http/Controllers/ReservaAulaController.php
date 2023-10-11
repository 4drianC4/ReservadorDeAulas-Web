<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use App\Models\Aula;

use Illuminate\Http\Request;

class ReservaAulaController extends Controller
{
    public function index()
    {
        return view('reservaUser');
    }

    public function create()
    {
        return view('reservaUser');
    }

    public function store(Request $request)
    {

        $aux = $request->nombre_aula;
        $aula = Aula::where('nombre', $aux)->first();
        /*if ($aula) {
            $idDelAula = $aula->id;
        }*/

        $reserva = new Reserva();
        $reserva->fecha = $request->fecha;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->descripcion = $request->descripcion;
        $reserva->hora_fin = $request->hora_fin;
        $reserva->aula_id = $aula->id;

        $userdd = 1;

        $reserva->usuario_id = $userdd; 
        $reserva->save();
        //return redirect()->url('/');
    }

    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        //return view('reservaUser', compact('reserva'));
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        //return view('reservaUser', compact('reserva'));
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->aula = $request->aula;
        $reserva->usuario_id = $request->usuario_id;
        $reserva->save();
        //return redirect()->route('reserva-aulas.index');
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        //return redirect()->route('reserva-aulas.index');
    }

}
