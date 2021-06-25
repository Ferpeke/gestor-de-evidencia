<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form class="shadow p-4 rounded-bottom fondo_formularios">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h5>Registro</h5>
            </div>
          </div>
          <hr class="divisor_horizontal">
          <div class="row" id="registro">
            <div class="col-md-6">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nombres">Nombre(s)</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="nombres" name="nombres" placeholder="Ingresar nombres">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="apellido_paterno">Apellido paterno</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="apellido_paterno" name="apellido_paterno" placeholder="Ingresar apellido paterno">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="apellido_materno">Apellido materno</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="apellido_materno" name="apellido_materno" placeholder="Ingresar apellido materno">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="sexo">Sexo:</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="sexo" name="sexo" placeholder="Ingresar sexo">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fecha_nacimiento">Nacimiento:</label>
                      <input type="date" class="form-control form-control-sm redondeado" id="fecha_nacimiento" name="fecha_nacimiento">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email"><i class="fas fa-at mr-2"></i>Email:</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="email" name="email" placeholder="Ingresar email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña:</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="contrasenia" name="contrasenia" placeholder="Ingresar contraseña">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="confirmar_contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña:</label>
                      <input type="text" class="form-control form-control-sm redondeado" id="confirmar_contrasenia" name="confirmar_contrasenia" placeholder="Ingresar contraseña">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12 text-center">
              <span class="btn btn-sm redondeado botones" id="boton_registrar"><i class="fas fa-sign-in-alt mr-2"></i>Registrar</span>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="../manager/registro.js"></script>