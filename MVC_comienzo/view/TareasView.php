<?php
// view se encarga de mostrar
include_once('libs/Smarty.class.php');

class TareasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas'); // asigna tareas a la variable $tareas

  }

  function mostrarTareas($tareas){ // le paso las tareas para que las muestre
    $this->smarty->assign('tareas', $tareas); // asigna tareas a la variable $tareas
    $this->smarty->display('templates/index.tpl'); // muestra el index.tlp
  }

  function mostrarCrearTareas(){
    $this->smarty->display('templates/formCrear.tpl');
  }

  function errorCrear($error, $titulo='', $descripcion='', $completada=''){
    $this->assignarTareaForm($titulo, $descripcion, $completada);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrear.tpl');
  }

  private function assignarTareaForm($titulo='', $descripcion='', $completada=0){
    $this->smarty->assign('titulo', $titulo);
    $this->smarty->assign('descripcion', $descripcion);
    $this->smarty->assign('completada', $completada);
  }
}
// vuelve a controller
 ?>
