<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Sansiaulas</title>
        <link rel="stylesheet" href="{{ asset('assets/styleslogin.css')}}">
    </head>

    <body>       
        <div class="fondo">   
            <div class="cabecera">
                <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
                <h1>BIENVENIDO A SANSIAULAS</h1>
            </div>
            
            <div class="cont">
                <div class="card">        
                    <img src="{{ asset('multimedia/user.png') }}" alt="usuario" class="imgcont">
                    <p>Usuario: <input type="text" class="inputs" name="nombre" size="40"></p>
                    <p>Contraseña: <input type="password" class="inputs" name="contraseña" size="40"></p>
                    <button><a href="{{url('/')}}">Ingresar</a></button>
                </div>
            </div>
            
            <div class="footer">
                <p class="contactos">contactos:</p>
                <div class="itemcontact">        
                    <img src="{{ asset('multimedia/gmail-icon.png') }}" alt="contacto gmail" class="icontact">
                    <a href="camararequeadrianrafael@gmail.com" target="_blank">Adrian Camara</a>
                </div>
                
                <div class="itemcontact">
                    <img src="{{ asset('multimedia/gmail-icon.png') }}" alt="contacto gmail" class="icontact">
                    <a href="#gmail #" target="_blank">Oliver Pozo</a>
                </div>
                <div class="itemcontact">
                    <p>repositorio:</p>                                                                                                
                    <a href="https://gitlab.com/ihatethewronganswer-programacionweb/reservadordeaula" target="_blank"><img src= "{{ asset('multimedia/gitlab-icon.png') }}" class="iconrepo"></a>
                </div>
            </div>

        </div>
    </body>    
</html>