<?php
  
  $conexion = new PDO("mysql:host=localhost:33061;dbname=gestor-tareas","root","Nandodrago4");
  if (isset($conexion)) {
    echo 'conectado';
  } else {
    echo 'estas muy feo';
  }
  
  
?>