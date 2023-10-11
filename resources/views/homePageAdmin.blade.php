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
        <!-- Simulate a smartphone / tablet -->
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
                    <th>Operación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aula 690A</td>
                    <td>50</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class = "button">Editar</button> 
                        <button onclick="document.getElementById('id01').style.display='block'" id = "bb" class = "button">Eliminar</button>
                        <div id="id01" class="modal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                            <form class="modal-content" action="/action_page.php">
                              <div class="container">
                                <h1>Eliminar Aula</h1>
                                <p>¿Está seguro de que desea eliminar el aula?</p>
                              
                                <div class="clearfix">
                                  <button class="button" id = "cancel" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                                  <button class="button" id = "delete" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Eliminar</button>
                                </div>
                              </div>
                            </form>
                          </div>

                          <script>
                            // Get the modal
                            var modal = document.getElementById('id01');
                            
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                              if (event.target == modal) {
                                modal.style.display = "none";
                              }
                            }
                            </script>
                    
                    </td>
                </tr>
                <tr>
                    <td>Aula 690B</td>
                    <td>80</td>
                    <td class="available">Disponible</td>
                    <td>
                        <button id = "bb" class = "button">Editar</button> 
                        <button id = "bb" class = "button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 690C</td>
                    <td>100</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 690D</td>
                    <td>70</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 691A</td>
                    <td>50</td>
                    <td class="available">Disponible</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 691B</td>
                    <td>40</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 691C</td>
                    <td>30</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 691D</td>
                    <td>20</td>
                    <td class="available">Disponible</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 692A</td>
                    <td>100</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 692B</td>
                    <td>200</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 692C</td>
                    <td>200</td>
                    <td class="available">Disponible</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 692D</td>
                    <td>80</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 692E</td>
                    <td>70</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 693A</td>
                    <td>60</td>
                    <td class="available">Disponible</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aula 693B</td>
                    <td>50</td>
                    <td class="reserved">Reservada</td>
                    <td>
                        <button id = "bb" class="button">Editar</button> 
                        <button id = "bb" class="button">Eliminar</button>
                    </td>
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
        <form action="/action_page.php">
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