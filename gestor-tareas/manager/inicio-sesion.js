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
            //   let usuario = $('#usuario').val();
            //   let contrasenia = $('#contrasenia').val();
            //   if(usuario == 'usuario@gmail.com' && contrasenia == '12345678') {
            //       alert('Hola bienvenido!');
            //       window.location.href = 'view/pagina-principal.php';
            //   } else {
            //       alert('Error!');
            //   }

            $.ajax({
                type : "POST",  
                url : "control/control-login.php", 
                data : {
                    email : $('#usuario').val(),
                    contrasenia : $('#contrasenia').val()
                }, 
                success : (respuesta) => {
                    console.log(respuesta);
                    if (respuesta == 1){ 
                        window.location.href = 'view/pagina-principal.php';
                    } else {
                        let contra = $('#contrasenia').val();
                        console.log(contra);
                        Swal.fire({
                            icon: 'error',
                            title: '¡Ups!',
                            text: 'Usuario no Correcto',
                            background: '#202020'
                        });
                    }
                }
            });
            
          }
      } 
  });
});