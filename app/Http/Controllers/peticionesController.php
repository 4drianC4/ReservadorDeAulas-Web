<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use App\Models\Aula;
use App\Models\Ambiente;
use App\Models\Reservador;
use App\Models\Periodo;
use App\Models\Usuario;
use App\Models\TipoAmbiente;
use App\Models\ReservaPeriodo;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PeticionesController extends Controller
{
    //obtener todas las reservas y mostrar nombre de aula y periodos
    public function index()
    {
        $reserva = Reservador::all();
        $reserva = Reservador::with('ambiente')->get();
        $reserva = Reservador::with('periodos')->get();
        return view('peticiones')->with('reserva', $reserva);
    }
    
    //aceptar una reserva
    public function aceptar($id)
    {
        $reserva = Reservador::find($id);
        $reserva->aceptado = true;
        $reserva->save();
        return redirect()->route('peticionesUs.index');
    }

    //rechazar una reserva
    public function rechazar($id)
    {
        $reserva = ReservaAulaController::find($id);
        $reserva->delete();
        return redirect()->route('peticionesUs.index');
    }
}
