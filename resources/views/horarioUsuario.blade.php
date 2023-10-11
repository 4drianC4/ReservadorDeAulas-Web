<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Sansiaulas</title>
        <link rel="stylesheet" href="{{ asset('assets/stylesunionAdminUser.css')}}">
        <script src="scripts/"></script>
    </head>
    <body>
        <div class="cabecera">
            <img src="{{ asset('multimedia/logoumss.png') }}" class="iconcab">
            <h1>Horario en aula</h1>
        </div>
        <div class="opciones">
            <form action="#">
                <label>
                  Inserte la fecha:
                  <input type="date" name="bday" />
                </label>
              
                <p><button>Buscar</button></p>
              </form>
        </div>
        <div>
        <table>
            <caption> Datos</caption>
            <tr>
                <th>Aula</th>
                <th>Horario</th>
                <th>Materia</th>
            </tr>
            <tr>
                <td>691A</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>625C</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>617B</td>
                <td></td>
                <td></td>              
            </tr>
            <tr>
                <td>InfLab1</td>
                <td></td>
                <td></td>                
            </tr>
            <tr>
                <td>692B</td>
                <td></td>
                <td></td>               
            </tr>
            <tr>
                <td>693D</td>
                <td></td>
                <td></td>               
            </tr>
            <tr>                
                <td>661</td>
                <td></td>
                <td></td>
            </tr>
            <tr>                
                <td>652</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>625</td>
                <td></td>
                <td></td>
            </tr>
            <tr>        
                <td>624</td>
                <td></td>
                <td></td>
            </tr>
        </table>
        </div>
    </body>
</html>