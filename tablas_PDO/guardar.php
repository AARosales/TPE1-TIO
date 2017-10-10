<?php
include_once('base_datos.php');
function guardarTarea($titulo, $descripcion, $completado) {
  $db = connect();
  //$sentencia = $db->prepare('INSERT INTO tarea(titulo,decripcion,completado) VALUES (?,?,?)');
  $sentencia = $db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
  $sentencia->execute([$titulo,$descripcion,$completado]);
  // $tareas = $sentencia->fetchAll();
   //return  "info guardada";
}

 ?>
