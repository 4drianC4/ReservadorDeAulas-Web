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
    </div>

    
<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
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
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->capacidad}}</td>
                    <td class="{{$c->estado == 'Disponible' ? 'available' : 'reserved'}}">{{$c->estado}}</td>
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
            <label for="birthday">Fecha:</label>
            <input type="date" id="birthday" name="birthday">
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
