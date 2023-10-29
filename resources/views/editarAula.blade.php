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



            <form action="{{ route('homeadmin.update', $aula->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $aula->nombreAmbiente }}" placeholder="Nombre del aula">
    
    <label for="ubicacion">Ubicación</label>
    <input type="text" name="ubicacion" id="ubicacion" value="{{ $aula->ubicacionAmbiente }}" placeholder="Ubicación del aula">
    
    <label for="capacidad">Capacidad</label>
    <input type="text" name="capacidad" id="capacidad" value="{{ $aula->capacidadAmbiente }}" placeholder="Capacidad del aula">
    
    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" id="tipo" value="{{ $aula->tipoAmbiente_id }}" placeholder="Tipo de aula">
    
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $aula->descripcionAmbiente }}" placeholder="Descripción del aula">
    
    <label for="activo">Estado</label>
    <input type="text" name="activo" id="activo" value="{{ $aula->activo }}" placeholder="Estado del aula">

    <label for="inhabilitado">Inhabilitado</label>
    <input type="text" name="inhabilitado" id="inhabilitado" value="{{ $aula->inhabilitado }}" placeholder="Inhabilitado del aula">
    
    <input type="submit" value="Editar">
</form>
       </div>
    </body>
</html>