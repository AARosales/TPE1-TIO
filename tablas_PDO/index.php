
<!-- <h1> LISTA DE TAREAS</h1>
<form class="" action="agregarTarea" method="post">
  <label for="tarea">Título</label>
  <input type="titulo" name="titulo" value="">
  <label for="descripcion">Descripción</label>
  <input type="descripcion" name="descripcion" value=""></br></br>
  <input type="checkbox" name="completado" value="1">Completada</br></br>
  <button type="submit" >Crear Tarea</button></br></br>
</form>

<ul class="list-group"> -->

  <?php
  include_once('libs/Smarty.class.php');
  include_once('mostrar.php');
  include_once('base_datos.php');
  include_once('guardar.php');
  include_once('tareas.php');
  define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
  // define el home
  function home()
  {
    $tareasArreglo = getTareas();
    $titulo = 'To do App';
    $smarty = new smarty();
    $smarty->assign('aca', $titulo);//variable de smarty tpl / dato quee pasas ('titulo',$titulo)
    $smarty->assign('tareas', $tareasArreglo);
    $smarty->debugging = true;
    $smarty->display('templates/index.tpl');
  }
?>

<?php

  function agregarTarea(){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $completado = isset($_POST['completado']) ? $_POST['completado'] : 0;
    guardarTarea($titulo, $descripcion, $completado);
    header("Location:". HOME); // redirecciona al home
  }

  function borrarTarea($params) {
    deleteTarea($params[0]);
    header("Location:". HOME);
    return $sentencia->execute([$params]);
  }

  function finalizarTarea($params){
    markCompletedTarea($params[0]);
    header("Location:". HOME);
  }
  ?>

</ul>
