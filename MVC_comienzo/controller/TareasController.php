<?php
// controller le pide las tareas y se las da al view para que las muestre
include_once('model/TareasModel.php');
include_once('view/TareasView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

class TareasController // es quien maneja y pega
{
private $view;
private $model;

function __construct()
{
  $this->view = new TareasView(); // crea instancia de vista
  $this->model = new TareasModel();  // crea instancia de modelo
}

public function index()
{
  $tareas = $this->model->getTareas(); // le pide las tareas al modelo
  $this->view->mostrarTareas($tareas); // le pide a view que muestre las tareas que ya le dió el modelo
}

public function create()
{
  $this->view->mostrarCrearTareas(); // le pide a view que muestre la tarea recién creada
}

public function store() // crea la tarea con el contenido que viene por POST
{
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $completada = isset($_POST['completado']) ? $_POST['completado'] : 0; // completada o completado?

  if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
    if($this->tienePalabrasProhibidas($titulo)){ // si es TRUE tiene una palabra prohibida
      $this->view->errorCrear('El titulo tiene palabras prohibidas', $titulo, $descripcion, $completada);
    }
    else{
      echo "error";
      die();
      $this->model->guardarTarea($titulo, $descripción, $completada);
      header('Location: '.HOME);
    }
  }
  else{
    $this->view->errorCrear('El campo título es requerido', $titulo, $descripcion, $completada);
  }
}

public function destroy($params)
{
  $id = $params[0];
  $this->model->borrarTarea($id); // le pide a view que borre la tarea seleccionada
  header('Location: '.HOME);
}
private function tienePalabrasProhibidas($titulo){ // crea función privada que será llamada en la función store
  $pprohibidas = ['Me gustaría', 'Quisiera', 'Web II','hole']; // crea arreglo de palabras prohibidas
  foreach ($pprohibidas as $palabra){ // recorre el arreglo y lo compara con lo ingresado
    if (strpos($titulo, $palabra)){  // TRUE o FALSE, compara el contenido del arreglo con lo ingresado
    //  return true;
      echo $titulo. "  ". $palabra;
        die();
    } else {
     //return false;
    }



    }
}
}




?>
