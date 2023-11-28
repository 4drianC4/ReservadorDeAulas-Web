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
use Illuminate\Support\Facades\Auth;

class PeticionesController extends Controller
{
    //obtener todas las reservas y mostrar nombre de aula y periodos
    public function index()
    {
        $reserva = Reservador::with('ambiente','periodo')->get();
        //$reserva = Reservador::where('aceptado', 0)->with('ambiente', 'periodo')->get();
        return view('peticiones')->with('reserva', $reserva);
    }
    
    //aceptar una reserva
    public function aceptar($id)
    {
        $reserva = Reservador::find($id);
        $reserva->aceptado = true;
        $reserva->save();
        return redirect()->route('peticiones.index');
    }

    //rechazar una reserva
    public function rechazar($id)
    {
        $reserva = Reservador::find($id);
        $reserva->delete();
        return redirect()->route('peticiones.index');
    }
}
