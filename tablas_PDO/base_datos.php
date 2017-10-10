<?php
function connect(){
  return new PDO('mysql:host=localhost;'
  .'dbname=db_tareas;charset=utf8'
  , 'root', '');
}

function markCompletedTarea($id) {
  $db = connect();
  $sentencia = $db->prepare("update tarea set completado=1 where id=?");
return $sentencia->execute([$id]);
}

function getTareas() {
  $db = connect();
  // Creamos una nueva conexión con:
  // ○ Servidor: localhost
  // ○ Base de datos: db_tareas
  // ○ Usuario: root
  // ○ Contraseña: root
  $sentencia = $db->prepare("select * from tarea");
  // le pide a la bd que construya esa sentencia y la guarde en sentencia
  $sentencia->execute();
  // ejecuta el SELECT en la base de datos
  $tareas = $sentencia->fetchAll();
  //le dice a sentencia guarde los datos de quary en tareas
  return $tareas;
}

function deleteTarea($id) {
  $db = connect();
  $sentencia = $db->prepare("delete from tarea where id=?");
  return $sentencia->execute([$id]);

}
 ?>
