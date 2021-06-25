$(document).ready(() => {
  $('#boton_agregar').hide();
  $('#vista_tareas').hide();
  $('#boton_lista_tareas').click(() => {
      $('#vista_jumbotron').hide();
      $('#boton_agregar').show();
      $('#vista_tareas').show();
  });
  $('#boton_agregar').click(() => {
      Swal.fire({
          html: 
              `
                  <h5 class="text-white">Agregar tarea</h5>
                  <form>
                      <div class="form-group text-left">
                          <label for="materia" class="text-white">Materia:</label>
                          <input type="text" class="form-control form-control-sm rounded-pill" id="materia" placeholder="Ingresar materia">
                      <div>
                      <div class="form-group mt-4">
                          <label for="tarea" class="text-white">Tarea:</label>
                          <textarea class="form-control" id="tarea">Ingresar tarea</textarea>
                      <div>
                  </form>
              `,
          background: '#202020',
          showCancelButton: true
      }).then((resultado) => {
          if(resultado.isConfirmed) {
              let materia = $('#materia').val();
              let tarea = $('#tarea').val();
              console.log(materia);
              console.log(tarea);
          }
      });
  });
  $('#boton_salir').click(() => {
      Swal.fire({
          icon: 'warning',
          title: '¿Estas seguro?',
          text: 'Estas apunto de cerrar sesión.',
          showCancelButton: true,
          background: '#202020'
      }).then((resultado) => {
          if(resultado.isConfirmed) {
              console.log('Sesion cerrada!');
          }
      });
  });
  $('#boton_eliminar_tarea').click(() => {
          Swal.fire({
              icon: 'warning',
              title: '¿Estas seguro?',
              text: 'Estas apunto de eliminar tarea.',
              showCancelButton: true,
              background: '#202020'
          }).then((resultado) => {
              if(resultado.isConfirmed) {
                  console.log('Tarea borrada');
              }
          })
      }
  );
  $('#boton_modificar_tarea').click(() => {
      Swal.fire({
          icon: 'warning',
          html: 
              `
                  <h5 class="text-white">Modificar tarea</h5>
                  <form>
                      <div class="form-group text-left">
                          <label for="materia" class="text-white">Materia:</label>
                          <input type="text" class="form-control form-control-sm rounded-pill" id="materia" placeholder="Ingresar materia">
                      <div>
                      <div class="form-group mt-4">
                          <label for="tarea" class="text-white">Tarea:</label>
                          <textarea class="form-control" id="tarea">Ingresar tarea</textarea>
                      <div>
                  </form>
              `,
          background: '#202020',
          showCancelButton: true
      }).then((resultado) => {
          if(resultado.isConfirmed) {
              let materia = $('#materia').val();
              let tarea = $('#tarea').val();
              console.log(materia);
              console.log(tarea);
          }
      });
  });
});