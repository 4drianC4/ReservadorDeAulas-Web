<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Sansiaulas</title>
        <link rel="stylesheet" href="{{ asset('assets/stylesreservaUser.css')}}">
        <script src="scripts/"></script>
    </head>
    <body>        
        <div class="cabecera">
            <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
        </div>
        <h1>peticiones</h1>
        <a href="{{url('/homeadmin')}}"><input type="button" value="Volver" class = "btn-reserva"></a>

    <div>
        <div class="card">
            <h2>Reserva</h2>
            <p>aula:</p>
            <p>horario:</p>
            <p>responsable:</p>
            <div class="botonera">
                <button class="accept">aceptar</button>
                <button class="delete">declinar</button>
            </div>
        </div>
        
        <div class="card">
            <h2>Reserva</h2>
            <p>aula:</p>
            <p>horario:</p>
            <p>responsable:</p>
            <div class="botonera">
                <button class="accept">aceptar</button>
                <button class="delete">declinar</button>
            </div>
        </div>

        <div class="card">
            <h2>Reserva</h2>
            <p>aula:</p>
            <p>horario:</p>
            <p>responsable:</p>
            <div class="botonera">
                <button class="accept">aceptar</button>
                <button class="delete">declinar</button>
            </div>
        </div>
    </div>
    </body>
</html>