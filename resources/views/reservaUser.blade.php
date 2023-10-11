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
            <img src= "{{ asset('multimedia/logoumss.png') }}" class="iconcab">
        </div>
        <h1>Reserva de Aulas</h1>
    <form action="{{route('reservaAula.store')}}" method="POST">
        {{csrf_field()}}
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre_aula" name="nombre_aula" required>

        <label for="fecha">Fecha de Inicio:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="hora_inicio">Hora de Inicio:</label>
        <input type="time" id="hora_inicio" name="hora_inicio" min="09:00" max="18:00" required>

        <label for="hora_fin">Hora de Fin:</label>
        <input type="time" id="hora_fin" name="hora_fin" min="09:00" max="18:00" required>

        
        <label for="motivo">Motivo de la Reserva:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <input type="submit" class = "btn-mostrar" class = "otro" value="Reservar Aula">

        <input type="button" value="Mostrar Información Aula" class = "btn-mostrar">
    </form>
    </body>
    
</html>