<?php

class TareasModel // se encarga de conectarnos a la base de datos
{
  private $db;
  function __construct(argument)
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');
  }
  function getTareas(){
    $sentencia = $this->db->prepare("select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  }
}

 ?>
