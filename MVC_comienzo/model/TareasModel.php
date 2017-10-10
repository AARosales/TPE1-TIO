<?php
// model se encarga de hacer las consultas a la BBDD usando PDO
class TareasModel // se encarga de conectarnos a la base de datos
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');
  } // el modelo devuelve todo

  function getTareas(){
    $sentencia = $this->db->prepare("select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC); // devuelve la lista de tareas
  }

  function guardarTarea($titulo, $descripcion, $completada){
    $sentencia = $this->db->prepare('INSERT INTO tarea(titulo, descripcion, completado) VALUES(?,?,?)'); // completada o completado?
    $sentencia->execute([$titulo, $descripcion, $completada]);
  }

  function borrarTarea($id_tarea){
    $sentencia = $this->db->prepare( "delete from tarea where id=?");
    $sentencia->execute([$id_tarea]);
  }

}


?>
