<?php
  
  $datos = array(
    'nombre' => $_POST['nombre'],
    'paterno' => $_POST['apellido_paterno'],
    'materno' => $_POST['apellido_materno'],
    'sexo' => $_POST['sexo'],
    'nacimiento'=>$_POST['fecha_naciento'],
    'email'=>$_POST['email'],
    'contrasenia' => sha1($_POST['contrasenia'])
  );

  require_once 'Usuario.php';
  $usuario = new Usuario
  
  
?>