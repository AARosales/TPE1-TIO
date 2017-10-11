<?php
if(isset($_REQUEST['nombre'])){
  if($_REQUEST['nombre'] != ''){
    echo "El nombre de usuario es: " . $_REQUEST['nombre']."</br>";
  }
  else {
    echo  "Ud no completó el campo del nombre</br>";
  }
}

if (isset($_REQUEST['email'])) {
  if($_REQUEST['email'] != ''){
    echo "El mail de usuario es: " . $_REQUEST['email']."</br>";
  }
  else {
    echo  "Ud no completó el campo del email</br>";
  }
}
  // if (isset($_REQUEST['password'])) {
  //   if($_REQUEST['password'] != ''){
  //     echo "Su contraseña quedará en buenas manos ;)";
  //   }
  //   else {
  //     echo  "Ud no completó el campo de password</br>";
  //   }
  // }
 ?>
