$(document).ready(() => {
  $('#boton_ingresar').click(() => {
      if($('#usuario').val() == '') {
          Swal.fire({
              icon: 'error',
              title: '¡Ups!',
              text: 'El campo usuario esta vació.'
          }); 
      } else {
          if($('#contrasenia').val() == '') {
              Swal.fire({
                  icon: 'error',
                  title: '¡Ups!',
                  text: 'El campo contraseña esta vació.',
                  background: '#202020'
              }); 
          } else {
              let usuario = $('#usuario').val();
              let contrasenia = $('#contrasenia').val();
              if(usuario == 'usuario@gmail.com' && contrasenia == '12345678') {
                  alert('Hola bienvenido!');
                  window.location.href = 'view/pagina-principal.php';
              } else {
                  alert('Error!');
              }
          }
      } 
  });
});