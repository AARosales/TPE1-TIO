<?php
include_once('model/ProductoModel.php');
include_once('view/ProductoView.php');

class ProductoController extends SecuredController
{

  function __construct()
  {
    parent::__construct();
    $this->view = new ProductoView(); // construye el objeto ProductoView
    $this->model = new ProductoModel();// construye el objeto ProductoModel
  }

  public function producto()
  {
    $invitado = SecuredController::getUser();

    $productos = $this->model->getProductos();
    $this->view->mostrarProductos($productos, $invitado);
  }

  public function create()
  {
    $invitado = SecuredController::getUser();
    if($invitado!==false){
      $categoriaModel = new categoriaModel();
      $categoria = $categoriaModel->getCategoria();
      $this->view->mostrarCrearProducto($categoria,$invitado);
    }
    else {
      header('Location: '.PRODUCTO);
    }
  }

  public function store()
  {
    $id_categoria =  $_POST['id_categoria'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $talle = $_POST['talle'];
    $stock = isset($_POST['stock']) ? $_POST['stock'] : 0;

    if(isset($_POST['id_categoria']) && !empty($_POST['id_categoria'])){
      $this->model->guardarProducto($id_categoria, $precio, $color, $talle, $stock);
      header('Location: '.PRODUCTO);
    }
    else{
      $this->view->errorCrear("El campo id_categoria es requerido", $id_categoria, $precio, $color, $talle);
    }
  }
  public function destroy($params)
  {
    $id = $params[0];
    $this->model->borrarProducto($id);
    header('Location: '.PRODUCTO);
  }

  public function finish($params)
  {
    $id= $params[0];
    $this->model->finalizarProducto($id);
    header('Location: '.PRODUCTO);
  }
}

?>
