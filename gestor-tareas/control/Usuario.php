<?php

  class Usuario 
  {
    private object $conexion;
    private string $host = 'localhost';
    private string $user = 'root';
    private string $db = 'gestor-tareas';
    private string $password = 'Nandodrago4';
    

    public function __construct()
    {
      $this->conexion = new PDO("mysql:host=$this->host:33061;dbname=$this->db",$this->user,$this->password);   
    }

    public function insertar(array $datos){
      $query = "INSERT INTO usuarios(nombre, paterno, materno, sexo, nacimiento, email, contrasenia) VALUES (:nombre, :paterno, :materno, :sexo, :nacimiento, :email, :contrasenia)";
      $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':paterno', $datos['paterno']);
            $stmt->bindParam(':materno', $datos['materno']);
            $stmt->bindParam(':sexo', $datos['sexo']);
            $stmt->bindParam(':nacimiento', $datos['nacimiento']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->bindParam(':contrasenia', $datos['contrasenia']);
            $respuesta = $stmt->execute();
            unset($this->conexion);
            return $respuesta;
    

    }

    public function login($email, $contrasenia){
      $query = "SELECT count(*) as existe FROM usuarios WHERE email = '$email' AND contrasenia = '$contrasenia'";
      $stmt = $this->conexion->prepare($query);
      $stmt->execute();

      $respuesta = $stmt->fetch(PDO::FETCH_ASSOC)['existe'];

      if ($respuesta > 0) {
        $query = "SELECT id_usuario FROM usuarios WHERE email = '$email' AND contrasenia = '$contrasenia'";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $id_usuario = $stmt->fetch(PDO::FETCH_BOTH)[0];
        $_SESSION['id_usuario'] = $id_usuario;
        echo 1;
      } else {
        echo 2;
      }
    }


  }

?>