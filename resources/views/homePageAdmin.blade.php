<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aulas</title>
    <link rel="stylesheet" href="{{ asset('assets/stylesunionAdminUser.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/"></script>
    
</head>
<body>

    <div class="cabecera">
        <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
        <!-- Simulate a smartphone / tablet -->
    </div>


    <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
      
<form>
    <a href="{{url('/reservaraula')}}"><input type="button" value="Reserva" class = "btn-reserva"></a>
    <a href="{{url('/login')}}"><input type="button" value="Log out" class = "btn-log"></a>
    <a href="{{url('/agregaraula')}}"><input type="button" value="agregar aula" class = "btn-aa"></a>
</form>

    <div class="container">
        <h1>Listado de Aulas</h1>
        <table>
            <thead>
                <tr>
                    <th>Aula</th>
                    <th>Capacidad</th>
                    <th>Estado</th>
                    <th>Operación</th>
                </tr>
            </thead>
            <tbody>

                @foreach($consulta2 as $aula)
                <tr>
                    <td>{{$aula->nombre}}</td>
                    <td>{{$aula->capacidad}}</td>
                    <td class="{{$aula->estado == 'Disponible' ? 'available' : 'reserved'}}">{{$aula->estado}}</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <form method="POST" action="{{ route('homeadmin.destroy', $aula->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id = "bb" class="button">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class = "pagination-container">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>

    <div>
    <form action="">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
            <label for="appt">Horario de Inicio:</label>
            <input type="time" id="appt" name="appt" min="09:00" max="18:00" required />
            <label for="appt">Horario Fin:</label>
            <input type="time" id="appt" name="appt" min="09:00" max="18:00" required />
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
    </div>

</body>
</html>
