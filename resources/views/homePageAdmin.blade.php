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

    <div class="headcontainer">
        <nav class="menu-container">
            <input type="button" id="menu">
            <label for="menu" id="boton-h">☰</label>
            <ul class="dropdown-menu">
                <li><a href="{{url('/peticiones')}}">Peticiones</a></li>
                <li><a href="{{url('/login')}}">Cerrar sesion</a></li>
                <li><a href="{{url('/agregaraula')}}">Agregar ambiente</a></li>
            </ul>
        </nav>
    

        <form class="example" action = "{{route('filtro.filterNameAdmin')}}" method="GET">
            <input type="text" placeholder="Search.." name="nombre">
            <button  class="buscador" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> 

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

                @foreach($consulta as $aula)
                <tr>
                    <td>{{$aula->nombreAmbiente}}</td>
                    <td>{{$aula->capacidadAmbiente}}</td>
                    <td class="{{$aula->activo == 1 ? 'available' : 'reserved'}}">
                        {{$aula->activo == 1 ? 'Disponible' : 'no disponible'}}    
                    </td>
                    <td>
                        <div class="buttoncont">
                            <form method="PUT" action="{{ route('homeadmin.edit', $aula->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" id = "bb" class="button">Editar</button>
                                
                            </form>
                        
                            <form method="POST" action="{{ route('homeadmin.destroy', $aula->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id = "bb" class="button">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class = "pagination-container">
            {{$consulta->links('vendor.pagination.custom')}}
        </div>
    </div>
    <div class="form">
    <form action="{{route('filtro.filterByEverythingAdmin')}}" method="GET">
    <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
            <label for="horarioInicio">Horario de Inicio:</label>
            <select id="horarioInicio" name="horarioInicio">
                <option value="">Escoje una opcion</option>
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

            <label for="horarioFin">Horario de Fin:</label>
            <select id="horarioFin" name="horarioFin">
                <option value="">Escoje una opcion</option>
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
            <label for="tipoAula">Tipo de Aula:</label>
            <select id="tipoAula" name="tipoAula" required >
                <option value="Cualquiera">Cualquiera</option>
                <option value="1">Auditorio</option>
                <option value="2">Común</option>
                <option value="3">Laboratorio</option>
            </select>
            <label for="capacidad">Capacidad:</label>
            <input type="number" name="capacidad" id="capacidad" placeholder="Capacidad del aula">
            <input type="submit" value="Filtrar">
    </form>
    </div>

</body>
</html>



