<?php
if(isset($_POST['nombre'])){
  if($_POST['nombre'] != ''){
    echo "El nombre de usuario es: " . $_POST['nombre']."</br>";
  }
  else {
    echo  "Ud no completó el campo del nombre</br>";
  }
}

if (isset($_POST['email'])) {
  if($_POST['email'] != ''){
    echo "El mail de usuario es: " . $_POST['email']."</br>";
  }
  else {
    echo  "Ud no completó el campo del email</br>";
  }
}
 ?>
