<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Sansiaulas</title>
        <link rel="stylesheet" href="{{ asset('assets/stylesreservaUser.css')}}">

    </head>
    <body>        
        <div class="cabecera">
            <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
        </div>
        <h1>peticiones</h1>
        <a href="{{url('/homeadmin')}}"><input type="button" value="Volver" class = "btn-reserva"></a>

    <div>
        @foreach($reserva as $r)
        <div class="card">
            <h2>Reserva</h2>
            <p>ambiente:</p>
            <p>{{$r->ambiente->nombreAmbiente}}</p>
            <p>horario Inicio:</p>
            <p>{{optional($r->periodo->first())->horarioInicio}}</p>
            <p>horario Fin:</p>
            <p>{{optional($r->periodo->last())->horarioFin}}</p>
            <p>responsable:</p>
            <div class="botonera">
            <form method="PUT" action="{{ route('peticiones.aceptar', $r->id) }}">
                    @csrf
                                @method('PUT')
                                <button type="submit" class="accept">aceptar</button>
                                
            </form>
                <button class="delete">declinar</button>
            </div>
        </div>
        @endforeach
    </div>
    </body>
</html>