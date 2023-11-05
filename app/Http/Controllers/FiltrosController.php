<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;
use App\Models\TipoAmbiente;
use App\Models\Reserva;



class FiltrosController extends Controller
{
    public function filterCapacidadAdmin(Request $request){
        $capacidadMinima = $request->capacidad;
        $consulta = Ambiente::where('capacidadAmbiente', '>=', $capacidadMinima)->orderBy('capacidadAmbiente', 'asc')->paginate(5);
        return view('homePageAdmin')->with('consulta', $consulta);
    }
    public function filterNameAdmin(Request $request){
        $nombreAmbiente = $request->nombre;
        $consulta = Ambiente::where('nombreAmbiente', 'like', '%'.$nombreAmbiente.'%')->paginate(5);
        return view('homePageAdmin')->with('consulta', $consulta);
    }
    public function filterCapacidadUser(Request $request){
        $capacidadMinima = $request->capacidad;
        $consulta = Ambiente::where('capacidadAmbiente', '>=', $capacidadMinima)->orderBy('capacidadAmbiente', 'asc')->paginate(5);
        return view('homePageUser')->with('consulta', $consulta);
    }
    public function filterNameUser(Request $request){
        $nombreAmbiente = $request->nombre;
        $consulta = Ambiente::where('nombreAmbiente', 'like', '%'.$nombreAmbiente.'%')->paginate(5);
        return view('homePageUser')->with('consulta', $consulta);
    }
    public function filterByRangeSchedule($fecha, $horainicio, $horafin){
        $consulta = Ambiente::whereHas('reservas', function($query) use ($fecha, $horainicio, $horafin){
            $query->where('fechaReserva', '=', $fecha)
            ->where('horaInicioReserva', '<=', $horainicio)
            ->where('horaFinReserva', '>=', $horafin);
        })->get();
        return view('homePageUser')->with('consulta', $consulta);
    }
}
