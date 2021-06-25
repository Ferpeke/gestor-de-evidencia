$(document).ready(() => {
  $('#boton_registrar').click(() => {
    if ($('#nombres').val() == '') {
      Swal.fire({
        icon: 'error',
        title: '¡Ups!',
        text: 'El campo nombres esta vació.',
        background: '#202020'
      });
    } else {
      if ($('#apellido_paterno').val() == '') {
        Swal.fire({
          icon: 'error',
          title: '¡Ups!',
          text: 'El campo apellido paterno esta vació.',
          background: '#202020'
        });
      } else {
        if ($('#apellido_materno').val() == '') {
          Swal.fire({
            icon: 'error',
            title: '¡Ups!',
            text: 'El campo apellido materno esta vació.',
            background: '#202020'
          });
        } else {
          if ($('#sexo').val() == '') {
            Swal.fire({
              icon: 'error',
              title: '¡Ups!',
              text: 'El campo sexo esta vació.',
              background: '#202020'
            });
          } else {
            if ($('#fecha_nacimiento').val() == '') {
              Swal.fire({
                icon: 'error',
                title: '¡Ups!',
                text: 'El campo fecha nacimiento esta vació.',
                background: '#202020'
              });
            } else {
              if ($('#email').val() == '') {
                Swal.fire({
                  icon: 'error',
                  title: '¡Ups!',
                  text: 'El campo email esta vació.',
                  background: '#202020'
                });
              } else {
                if ($('#contrasenia').val() == '') {
                  Swal.fire({
                    icon: 'error',
                    title: '¡Ups!',
                    text: 'El campo contraseña esta vació.',
                    background: '#202020'
                  });
                } else {
                  if ($('#confirmar_contrasenia').val() == '') {
                    Swal.fire({
                      icon: 'error',
                      title: '¡Ups!',
                      text: 'El campo confirmar contraseña esta vació.',
                      background: '#202020'
                    });
                  } else {
                    if ($('#contrasenia').val() == $('#confirmar_contrasenia').val()) {
                      console.log('Genial!');
                      $.ajax({
                        url : "control/control-registro.php",
                        data : $('#registro').serialize(),
                        type : "post",
                        success : (respuesta) => {
                            console.log(respuesta);
                        }
                      });
                    } else {
                      console.log('Las contraseñas no coinciden.');
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  });
});