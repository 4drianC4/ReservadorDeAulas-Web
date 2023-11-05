<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aulas</title>
    <link rel="stylesheet" href="{{ asset('assets/stylesunionAdminUser.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('assets/scripts.js')}}"></script>
    
</head>
<body>
    <div class="cabecera">
        <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
    </div>

    <form class="example" action = "{{route('filtro.filterNameUser')}}" method="GET">
        <input type="text" placeholder="Search.." name="nombre">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    
<form>
    <a href="{{url('/reservaraula')}}"><input type="button" value="Reserva" class = "btn-reserva"></a>
    <a href="{{url('/login')}}"><input type="button" value="Log in" class = "btn-log"></a>
    <a href="{{url('/horariousuario')}}"><input type="button" value="Horarios de usuario" class = "btn-horario"></a>
</form>

    <div class="container">
        <h1>Listado de Aulas</h1>
        <table>
            <thead>
                <tr>
                    <th>Aula</th>
                    <th>Capacidad</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consulta as $c)
                <tr>
                    <td>{{$c->nombreAmbiente}}</td>
                    <td>{{$c->capacidadAmbiente}}</td>
                    <td class="{{$c->activo == 1 ? 'available' : 'reserved'}}">
                        {{$c->activo == 1 ? 'Disponible' : 'Reservada'}}    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div class = "pagination-container">     
            {{$consulta->links('vendor.pagination.custom')}}   
        </div>
    </div>
    
    <div>
        <form action="">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
            <label for="appt">Horarios:</label>
            <select id="appt" name="appt" required >
                <option value="06:45">06:45 - 08:15</option>
                <option value="08:15">08:15 - 09:45</option>
                <option value="09:45">09:45 - 11:15</option>
                <option value="11:15">11:15 - 12:45</option>
                <option value="12:45">12:45 - 14:15</option>
                <option value="14:15">14:15 - 15:45</option>
                <option value="15:45">15:45 - 17:15</option>
                <option value="17:15">17:15 - 18:45</option>
                <option value="18:45">18:45 - 20:15</option>
                <option value="20:15">20:15 - 21:45</option>
            </select>
            <label for="appt">Tipo de Aula:</label>
            <select>
                <option value="Cualquiera">Cualquiera</option>
                <option value="Auditorio">Auditorio</option>
                <option value="Común">Común</option>
                <option value="Laboratorio">Laboratorio</option>
            </select>
            <label for="appt">Capacidad:</label>
            <select>
                <option value="Cualquiera">Cualquiera</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="70">70</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
            </select>
            <input type="submit" value="Filtrar">
        </form>


        <form action = "{{route('filtro.filterCapacidadUser')}}" method="GET">
        <label for="capacidad">Capacidad:</label>
        <input type="number" name="capacidad" id="capacidad" placeholder="Capacidad del aula" required>
        <input type="submit" value="FiltrarCapacidad">
    </form>
    </div>

    
</body>
</html>
