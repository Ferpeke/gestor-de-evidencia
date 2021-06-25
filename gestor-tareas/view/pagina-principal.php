<?php
require_once '../app/config.php'
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aquí va nombre</title>
  <?php
  require_once '../app/dependencias.php';
  ?>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 p-0">
        <!-- Image and text -->
        <nav class="navbar navbar-light barra">
          <a class="navbar-brand text-white" href="#"><i class="fas fa-clipboard-list mr-2"></i>Lista de tareas</a>
          <div class="btn-group">
            <span class="btn btn-sm rounded-pill botones mr-4" id="boton_agregar"><i class="fas fa-plus-circle mr-2"></i>Agregar</span>
            <span class="btn btn-sm rounded-pill botones" id="boton_salir"><i class="fas fa-sign-out-alt mr-2"></i>Salir</span>
          </div>

        </nav>
      </div>
    </div>
    <div class="row justify-content-center mt-5" id="vista_jumbotron">
      <div class="col-lg-8">
        <div class="jumbotron fondo_formularios">
          <h1 class="display-4">¡Hola <?php echo 'Usuario' ?>, bienvenid<?php echo '@' ?></h1>
          <p class="lead text-center my-5">
            Esta es una aplicación web que te permite realizar una lista de tareas,
            así que nada, no olvides registrar ninguna tarea que te haga falta.
          </p>
          <hr class="divisor_horizontal">
          <div class="text-center mt-4">
            <span class="btn btn-sm rounded-pill botones" id="boton_lista_tareas"><i class="fas fa-list-ul mr-2"></i>Ir a lista de tareas</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-5" id="vista_tareas">
      <div class="col-lg-8">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td>
                <div class="rounded p-4 fondo_formularios">
                  <div class="container">
                    <div class="row">
                      <div class="col">

                        <div class="d-flex mb-3">
                          <div class="mr-auto"><?php echo 'Programación web'; ?></div>
                          <div>
                            <span class="btn btn-sm rounded-pill botones mr-3" id="boton_modificar_tarea"><i class="fas fa-edit mr-2"></i>Modificar</span>
                          </div>
                          <div>
                            <span class="btn btn-sm rounded-pill botones" id="boton_eliminar_tarea"><i class="fas fa-trash-alt mr-2"></i>Eliminar</span>
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr class="divisor_horizontal">
                    <div class="row">
                      <div class="col-lg-12">
                        <p>
                          <?php
                          echo '
                                                            Esta es una aplicación web que te permite realizar una lista de tareas,
                                                            así que nada, no olvides registrar ninguna tarea que te haga falta.
                                                        ';
                          ?>
                        </p>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-lg-12 text-right">
                        <small><?php echo 'dd/mm/yyyy' ?></small>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="../manager/pagina-principal.js "></script>
</body>

</html>