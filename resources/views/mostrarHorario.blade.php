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
        <a href="{{url('/reservaraula')}}"><input type="button" value="volver" class = "btn-volver"></a>
        
        <div class="opciones">
            <label for="semana">semana del mes:</label>
            <select name="semana" id="semanames">
                <option value="1semana">1°semana</option>
                <option value="2semana">2°semana</option>
                <option value="3semana">3°semana</option>
                <option value="4semana">4°semana</option>
            </select>
        </div>
        <div class="container">
        <table>
            
            <caption> Horarios de la semana</caption>
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <th>Lu</th>
                    <th>Ma</th>
                    <th>Mi</th>
                    <th>Ju</th>
                    <th>Vi</th>
                    <th>Sa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>6:45</th>
                    <td></td>
                    <td class="reserved">R</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>8:15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="reserved">R</td>
                    <td></td>
                </tr>
                <tr>
                    <th>9:45</th>
                    <td class="reserved">R</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="reserved">R</td>
                    <td></td>
                </tr>
                <tr>
                    <th>11:15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>12:45</th>
                    <td></td>
                    <td class="reserved">R</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="reserved">R</td>
                </tr>
                <tr>
                    <th>14:15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="reserved">R</td>
                </tr>
                <tr>
                    <th>15:45</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>15:45</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>17:15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>18:45</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>20:15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
    </body>
</html>