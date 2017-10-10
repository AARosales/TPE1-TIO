<?php
  function about($nombre=['']) {
    $html = '<!DOCTYPE html>
    <html>
      <head>
      <base href="http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/'.'" target="_blank">
'.
// CONSULTO EL NOMBRE DEL SERVIDOR Y LA RUTA
// ESTO SIRVE PARA QUE EL SERVIDOR BUSQUE EN LA CARPETA DEL PROYECTO
// RUTA DINÁMICA
'.
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>';

    if($nombre[0]==='sb') {
      $html.='<h1>Soy Sebastián Bellido</h1>';
      $html.='<img src="images/2016.jpg" alt="Soy Seba">';

    } else {
      $html.='<h1>Somos los mejores del mundo</h1>';
      $html.='<img src="images/desarrolladores.jpg" alt="los mejores desarrolladores">';
    }
    $html.='</body>
    </html>';

    $html.="Server Name: ".$_SERVER['SERVER_NAME']."</br>";// MUESTRA EL NOMBRE DEL SERVIDOR HOST
    $html.="PHP_Self: ".$_SERVER['PHP_SELF']."</br>"; // muestra la ruta
    $html.="DIR PHP Self:" . dirname($_SERVER['PHP_SELF']); // la ruta de los archivos

    return $html;

}
?>
