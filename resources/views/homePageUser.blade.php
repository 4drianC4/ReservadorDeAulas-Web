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

    
<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
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
                <tr>
                    <td>Aula 690A</td>
                    <td>50</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 690B</td>
                    <td>80</td>
                    <td class="available">Disponible</td>
                </tr>
                <tr>
                    <td>Aula 690C</td>
                    <td>100</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 690D</td>
                    <td>70</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 691A</td>
                    <td>50</td>
                    <td class="available">Disponible</td>
                </tr>
                <tr>
                    <td>Aula 691B</td>
                    <td>40</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 691C</td>
                    <td>30</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 691D</td>
                    <td>20</td>
                    <td class="available">Disponible</td>
                </tr>
                <tr>
                    <td>Aula 692A</td>
                    <td>100</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 692B</td>
                    <td>200</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 692C</td>
                    <td>200</td>
                    <td class="available">Disponible</td>
                </tr>
                <tr>
                    <td>Aula 692D</td>
                    <td>80</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 692E</td>
                    <td>70</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <tr>
                    <td>Aula 693A</td>
                    <td>60</td>
                    <td class="available">Disponible</td>
                </tr>
                <tr>
                    <td>Aula 693B</td>
                    <td>50</td>
                    <td class="reserved">Reservada</td>
                </tr>
                <!-- Agrega más filas según tus aulas -->
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
