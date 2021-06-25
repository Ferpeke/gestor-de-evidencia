<?php

  class Usuario 
  {
    private object $conexion;
    private string $host = 'localhost:33061';
    private string $user = 'root';
    private string $db = 'gestor-tareas';
    private string $password = 'Nandodargo4';

    public function __construct()
    {
      $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db,$this->user,$this->password");   
    }

    public function insertar(array $datos){
      $query = "INSERT INTO usuarios(nombre, paterno, materno, sexo, nacimiento, email, contrasenia) VALUES (:nombre, :paterno, :materno, :sexo, :nacimiento, :emai, :contrasenia)";
      $stmt = $this ->conexion->prepare($query);
      $stmt->bindParam(':nombre', $datos['nombre']);
    

    }
  }

?>