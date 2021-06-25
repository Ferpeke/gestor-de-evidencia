<?php
    $datos = array(
        "nombre" => $_POST['nombres'],
        "paterno" => $_POST['apellido_paterno'],
        "materno" => $_POST['apellido_materno'],
        "sexo" => $_POST['sexo'],
        "nacimiento" => $_POST['fecha_nacimiento'],
        "email" => $_POST['email'],
        "contrasenia" => sha1($_POST['contrasenia']),
    );

    require_once 'Usuario.php';
    $usuario = new Usuario();

    $respuesta = $usuario->insertar($datos);
    return $respuesta;
?>