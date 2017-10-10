<?php

include_once('base_datos.php');
$tareas = getTareas();
echo "<ul>";

foreach ($tareas as $tarea) {
  echo '<li>'. $tarea['titulo'].': '.$tarea['descripcion'].'</li>';
}
echo "</ul>";

 ?>
