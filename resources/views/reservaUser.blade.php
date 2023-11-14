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
        <input type="text" id="nombre_ambiente" name="nombre_ambiente" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>


        <label for="horarioInicio">Horario de Inicio:</label>
        <select id="horarioInicio" name="horarioInicio" required >
            <option value="1">06:45 - 08:15</option>
            <option value="2">08:15 - 09:45</option>
            <option value="3">09:45 - 11:15</option>
            <option value="4">11:15 - 12:45</option>
            <option value="5">12:45 - 14:15</option>
            <option value="6">14:15 - 15:45</option>
            <option value="7">15:45 - 17:15</option>
            <option value="8">17:15 - 18:45</option>
            <option value="9">18:45 - 20:15</option>
            <option value="10">20:15 - 21:45</option>
        </select>

        <label for="horarioFin">HorarioFin:</label>
        <select id="horarioFin" name="horarioFin" required >
            <option value="1">06:45 - 08:15</option>
            <option value="2">08:15 - 09:45</option>
            <option value="3">09:45 - 11:15</option>
            <option value="4">11:15 - 12:45</option>
            <option value="5">12:45 - 14:15</option>
            <option value="6">14:15 - 15:45</option>
            <option value="7">15:45 - 17:15</option>
            <option value="8">17:15 - 18:45</option>
            <option value="9">18:45 - 20:15</option>
            <option value="10">20:15 - 21:45</option>
        </select>

        <label for="motivo">Motivo de la Reserva:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
        
        
        <input type="submit" class = "btn-mostrar" class = "otro" value="Reservar Aula">


        


        <a  href="{{url('/horariodeaula')}}"><input type="button" value="Mostrar Información Aula" class = "btn-mostrar"></a>
        <a  href="{{url('/')}}"><input type="button" value="volver" class = "btn-volver"></a>
    </form>
    </body>
    
</html>