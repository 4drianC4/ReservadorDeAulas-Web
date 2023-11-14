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
            <p>{{$r->horarioInicio}}</p>
            <p>horario Fin:</p>
            <p>{{$r->horarioFin}}</p>
            <p>responsable:</p>
            <div class="botonera">
                <button class="accept">aceptar</button>
                <button class="delete">declinar</button>
            </div>
        </div>
        @endforeach
    </div>
    </body>
</html>