<?php
include_once('base_datos.php');
function mostrarTarea(){

  $tareas = getTareas();
  echo "<ul>";

  foreach ($tareas as $tarea) {
    echo '<li>'. $tarea['titulo'].': '.$tarea['descripcion'].': '.$tarea['completado'].'</li>';
  }
  echo "</ul>";
}

 ?>
