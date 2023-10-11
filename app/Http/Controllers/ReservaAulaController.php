<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReservaAulaController extends Controller
{
    //
    public function index(){
        return view('listaAulas');
    }

    public function reserva(){
        return view('reservaUser');
    }

    


}
