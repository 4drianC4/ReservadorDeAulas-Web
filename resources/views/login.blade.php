<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Sansiaulas</title>
        <link rel="stylesheet" href="{{ asset('assets/styleslogin.css')}}">
        <script src="scripts/"></script>
    </head>

    <body>
        <div class="cabecera">
            <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
            <h1>BIENVENIDO A SANSIAULAS</h1>
        </div>
        <div class="cont">        
            <img src="{{ asset('multimedia/user.png') }}" alt="usuario" class="imgcont">
            <p>Nombre de usuario: <input type="text" name="nombre" size="40"></p>
            <p>Contraseña: <input type="password" name="contraseña" size="40"></p>
            <button>Ingresar</button>
            
        </div>
    </body>
    <footer>
        <p>contactos:</p>
        <div class="itemcontact">        
            <img src="{{ asset('multimedia/gmail-icon.png') }}" alt="contacto gmail" class="icontact">
            <a href="camararequeadrianrafael@gmail.com" target="_blank">Adrian Camara</a>
        </div>
        
        <div class="itemcontact">
            <img src="{{ asset('multimedia/gmail-icon.png') }}" alt="contacto gmail" class="icontact">
            <a href="#gmail #" target="_blank">Oliver Pozo</a>
        </div>
        <p>repositorio:</p>                                                                                                
        <a href="https://gitlab.com/ihatethewronganswer-programacionweb/reservadordeaula" target="_blank"><img src= "{{ asset('multimedia/gitlab-icon.png') }}" class="icontact"></a>
    </footer>
</html>