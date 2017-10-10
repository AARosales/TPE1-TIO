<?php
include_once 'libs/Smarty.class.php';

class TareasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }
  function motrarTareas($tareas){
    $this->smarty->assign('tareas', $tareas);
    $this->smarty->display('templates/tareas.tpl');
  }
}

 ?>
