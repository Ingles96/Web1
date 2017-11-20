<?php
/**
 * Permitir la conexion contra la base de datos
 */
class bd
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="futbol";
  private $pass="futbol123";
  private $db_name="futbol";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  public function plantilla(){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT * FROM plantilla");

    }

}

public function palmares(){
    if($this->error==false){
      $resultado2 = $this->conexion->query("SELECT * FROM palmares");

  }

}
}

 ?>
