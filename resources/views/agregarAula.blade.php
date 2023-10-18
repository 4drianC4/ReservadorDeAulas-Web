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
        <div>
            <h1>Agregar Aula</h1>
            <form action="{{route('homeadmin.store')}}" method = "POST">
                {{csrf_field()}}
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del aula" required>
                <label for="ubicacion">Ubicación:</label>
                <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación del aula" required>
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" id="capacidad" placeholder="Capacidad del aula" required>
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="Auditorio">Auditorio</option>
                    <option value="Común">Común</option>
                    <option value="Laboratorio">Laboratorio</option>
                </select>
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="Descripción del aula" required>
                <label for="estado">Estado:</label>
                <select name="estado" id="estado">
                    <option value="Disponible">Disponible</option>
                    <option value="Reservada">Reservada</option>
                </select>
                <input type="submit" value="Agregar">
            </form>
        </div>
    </body>
</html>