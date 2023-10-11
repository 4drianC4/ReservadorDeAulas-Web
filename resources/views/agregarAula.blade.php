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
            <form action="#">
                <p>ID Aula</p>
                <p><input type="text" name="idAula" size="40"></p>
                <p>ubicación</p>
                <p><input type="text" name="ubi" size="40"></p>
                <p>capacidad</p>
                <p><input type="text" name="capacidad" size="40"></p>
                <p>descripción</p>
                <p><input type="text" name="descripcion" size="40"></p>
                <p><input type="button" value="Agregar" class="btn-agregar"></p>
            </form>
        </div>
    </body>
</html>