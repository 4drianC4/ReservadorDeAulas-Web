<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Ambiente;
use App\Models\TipoAmbiente;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;

class AulaController extends Controller
{
    //
    public function index()
    {
        $consulta = Ambiente::paginate(5);
        return view('homePageUser')->with('consulta', $consulta);
    }

    public function create(){
        $consulta = Ambiente::paginate(5);
        return view('homePageAdmin')->with('consulta', $consulta);
    }

    public function store(Request $request){
        $Ambiente = new Ambiente();
        $Ambiente->nombreAmbiente = $request->nombre;
        $Ambiente->descripcionAmbiente = $request->descripcion;
        $Ambiente->ubicacionAmbiente = $request->ubicacion;
        $Ambiente->capacidadAmbiente = $request->capacidad;
        $Ambiente->activo = $request->activo;
        $Ambiente->inhabilitado = $request->inhabilitado;
        $Ambiente->tipoAmbiente_id = $request->tipo;
        $Ambiente->save();

        $consulta2 = Ambiente::all();
        return redirect ('homeadmin');
    }

    public function show($id){
        $Ambiente = Ambiente::find($id);
        return view('mostrarHorario',compact('Ambiente'));
    }
    public function edit($id){
        $Ambiente = Ambiente::find($id);
        return view('editarAula')->with('aula', $Ambiente);
    }

    public function update(Request $request, $id){
        $Ambiente = Ambiente::find($id);
        $Ambiente->nombreAmbiente = $request->nombre;
        $Ambiente->descripcionAmbiente = $request->descripcion;
        $Ambiente->ubicacionAmbiente = $request->ubicacion;
        $Ambiente->capacidadAmbiente = $request->capacidad;
        $Ambiente->activo = $request->activo;
        $Ambiente->inhabilitado = $request->inhabilitado;
        $Ambiente->tipoAmbiente_id = $request->tipo;
        $Ambiente->save();
        $consulta2 = Ambiente::all();
        return redirect('homeadmin');
    }
    public function destroy($id){
        $Ambiente = Ambiente::find($id);
        //$Ambiente->delete();
        $Ambiente->activo = 0;
        $Ambiente->inhabilitado = 1;
        $Ambiente->save();
        $consulta2 = Ambiente::all();
        //return view('homePageAdmin')->with('consulta2', $consulta2);

        return redirect('homeadmin');
    }

//controladores para el tipo de ambiente
    public function showTipo(){
        $consulta3 = TipoAmbiente::all();
        //return $consulta;
        //return view('homePageUser');
        return view('agregarAula')->with('consulta3', $consulta3);
    }

    
    public function procesarCSV(Request $request)
{
    $file = $request->file('archivo_csv');
    $reader = Reader::createFromPath($file->getPathname(), 'r');
    $reader->setDelimiter(';');
    $reader->setHeaderOffset(0);
    $records = $reader->getRecords();
    foreach ($records as $record) {
        $Ambiente = new Ambiente();
        $Ambiente->nombreAmbiente = $record['nombreAmbiente'];
        $Ambiente->descripcionAmbiente = $record['descripcionAmbiente'];
        $Ambiente->ubicacionAmbiente = $record['ubicacionAmbiente'];
        $Ambiente->capacidadAmbiente = $record['capacidadAmbiente'];
        $Ambiente->activo = $record['activo'];
        $Ambiente->inhabilitado = $record['inhabilitado'];
        $Ambiente->tipoAmbiente_id = $record['tipoAmbiente_id'];
        var_dump($Ambiente); // Imprime la variable en la página web
        $Ambiente->save();
    }
    return redirect('homeadmin');
}

}