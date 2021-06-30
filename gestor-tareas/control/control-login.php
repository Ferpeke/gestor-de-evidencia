<?php
  
  $datos = array(
    "email" => $_POST['email'],
    "contrasenia" => $_POST['contrasenia']
  );

  print_r($datos);

  require_once 'Usuario.php';
  $usuario = new Usuario();
  $respuesta = $usuario->login($datos['email'], $datos['contrasenia']);
  
  echo $respuesta;
?>