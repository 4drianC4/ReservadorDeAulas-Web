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
            <h2 id="h2-reserva">Reserva</h2>            
            <label>ambiente: {{$r->ambiente->nombreAmbiente}}</label>
            <label>fecha: {{$r->fechaReserva}}</label>
            <label>horario Inicio: {{optional($r->periodo->first())->horarioInicio}}</label>        
            <label>horario Fin: {{optional($r->periodo->last())->horarioFin}}</label>
            <label>responsable:</label>
            <div class="botonera">
                <form class="formbutton" method="POST" action="{{ route('peticiones.aceptar', $r->id) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="accept">aceptar</button>
                </form >
                <form class="formbutton" method="POST" action="{{ route('peticiones.rechazar', $r->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">declinar</button>
                </form>
            <form class="formbutton">
            </form>
            </div>
        </div>
        @endforeach
    </div>
    </body>
</html>