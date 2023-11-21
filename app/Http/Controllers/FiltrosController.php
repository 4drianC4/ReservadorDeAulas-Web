<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;
use App\Models\TipoAmbiente;
use App\Models\Reservador;
use App\Models\Periodo;
use App\Models\PeriodoReservador;
use Illuminate\Support\Facades\DB;





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
    /*public function filterByRangeSchedule($fecha, $horainicio, $horafin){
        $consulta = Ambiente::whereHas('reservas', function($query) use ($fecha, $horainicio, $horafin){
            $query->where('fechaReserva', '=', $fecha)
            ->where('horaInicioReserva', '<=', $horainicio)
            ->where('horaFinReserva', '>=', $horafin);
        })->paginate(5);
        return view('homePageUser')->with('consulta', $consulta);
    }*/
    public function filterByTipoAula($tipo){
        $consulta = Ambiente::whereHas('tipoAmbiente', function($query) use ($tipo){
            $query->where('nombreTipoAmbiente', '=', $tipo);
        })->paginate(5);
        return view('homePageUser')->with('consulta', $consulta);
    }


    public function filterByEverything(Request $request)
    {
        $fecha = $request->fecha;
        $horarioInicio = $request->horarioInicio;
        $horarioFin = $request->horarioFin;
        $tipoAula = $request->tipoAula;
        $capacidad = $request->capacidad;

        // Inicializar con todos los ambientes paginados
        $resultados = Ambiente::query();

        // Aplicar filtro por fecha, horarioInicio y horarioFin
        if (isset($fecha) && isset($horarioInicio) && isset($horarioFin)) {
            $resultados->whereNotIn('id', function ($query) use ($horarioInicio, $horarioFin, $fecha) {
                $query->select('ambientes.id')
                    ->from('ambientes')
                    ->join('reservadors', 'ambientes.id', '=', 'reservadors.ambiente_id')
                    ->join('periodo_reservador', 'reservadors.id', '=', 'periodo_reservador.reservador_id')
                    ->join('periodos', 'periodo_reservador.periodo_id', '=', 'periodos.id')
                    ->where('periodo_reservador.periodo_id', '>=', $horarioInicio)
                    ->where('periodo_reservador.periodo_id', '<=', $horarioFin)
                    ->where('reservadors.fechaReserva', '=', $fecha);
            });
        }

        // Aplicar filtro por tipoAula
        if ($tipoAula != 'Cualquiera') {
            $resultados->where('tipoAmbiente_id', '=', $tipoAula);
        }

        // Aplicar filtro por capacidad
        if ((int)$capacidad) {
            $resultados->where('capacidadAmbiente', '>=', (int)$capacidad);
        }

        // Ordenar por capacidad si se aplica el filtro de capacidad
        if ($resultados->getQuery()->wheres) {
            $resultados->orderBy('capacidadAmbiente', 'asc');
        }

        $resultados = $resultados->paginate(5);

        return view('homePageUser')->with('consulta', $resultados);
    }

    public function filterByEverythingAdmin(Request $request)
    {
        $fecha = $request->fecha;
        $horarioInicio = $request->horarioInicio;
        $horarioFin = $request->horarioFin;
        $tipoAula = $request->tipoAula;
        $capacidad = $request->capacidad;

        // Inicializar con todos los ambientes paginados
        $resultados = Ambiente::query();

        // Aplicar filtro por fecha, horarioInicio y horarioFin
        if (isset($fecha) && isset($horarioInicio) && isset($horarioFin)) {
            $resultados->whereNotIn('id', function ($query) use ($horarioInicio, $horarioFin, $fecha) {
                $query->select('ambientes.id')
                    ->from('ambientes')
                    ->join('reservadors', 'ambientes.id', '=', 'reservadors.ambiente_id')
                    ->join('periodo_reservador', 'reservadors.id', '=', 'periodo_reservador.reservador_id')
                    ->join('periodos', 'periodo_reservador.periodo_id', '=', 'periodos.id')
                    ->where('periodo_reservador.periodo_id', '>=', $horarioInicio)
                    ->where('periodo_reservador.periodo_id', '<=', $horarioFin)
                    ->where('reservadors.fechaReserva', '=', $fecha);
            });
        }

        // Aplicar filtro por tipoAula
        if ($tipoAula != 'Cualquiera') {
            $resultados->where('tipoAmbiente_id', '=', $tipoAula);
        }

        // Aplicar filtro por capacidad
        if ((int)$capacidad) {
            $resultados->where('capacidadAmbiente', '>=', (int)$capacidad);
        }

        // Ordenar por capacidad si se aplica el filtro de capacidad
        if ($resultados->getQuery()->wheres) {
            $resultados->orderBy('capacidadAmbiente', 'asc');
        }

        $resultados = $resultados->paginate(5);

        return view('homePageAdmin')->with('consulta', $resultados);
    }
    
}
