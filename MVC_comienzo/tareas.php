<?php
function connect(){
  return new PDO('mysql:host=localhost;'
  .'dbname=db_tareas;charset=utf8'
  , 'root', '');
}

function markCompletedTarea($id_tarea)
{
  $db = connect();
  $sentencia = $db->prepare( "update tarea set completada=1 where id=?");
  return $sentencia->execute([$id_tarea]);
}

function deleteTarea($id_tarea)
{
  $db = connect();
  $sentencia = $db->prepare( "delete from tarea where id=?");
  return $sentencia->execute([$id_tarea]);
  return $sentencia->errorInfo());
}

function getTareas()
{
  $db = connect();
  $sentencia = $db->prepare( "select * from tarea");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function insertTarea($titulo, $descripcion, $completada){
  $db = connect();
  $sentencia = $db->prepare('INSERT INTO tarea(titulo,descripcion,completada) VALUES(?,?,?)');
  $sentencia->execute([$titulo,$descripcion,$completada]);
}

 ?>
