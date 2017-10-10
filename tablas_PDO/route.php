  <?php
  define('ACTION',0); //
  define('VALOR1',1);
  define('VALOR2',2);
  include_once 'config/ConfigApp.php';
  include_once 'index.php';

  function parseURL($url){
  $urlExploded = explode('/', $url);
  // crea un arreglo de la url que llega separando con la barra
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  // Creo un arreglo donde el parametro 0 es ACTION
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded, 1) : null;
  // Crea otro arreglo dentro del anterior con los valores que se carguen VALOR1
  return $arrayReturn;
  }


  if(isset($_GET['action'])) {
  // si viene seteada action
  $urlData = parseURL($_GET['action']);
  // llama a la funcion parseURL con la url
  $action = $urlData[ConfigApp::$ACTION];
  // almacena la acción dentro de la variable $action
  if(array_key_exists($action, ConfigApp::$ACTIONS)){
  // pregunta si existe $action dentro del array $ACTIONS de las clases del archivo ConfigApp.php
  $params = $urlData[ConfigApp::$PARAMS];
  // guarda los parámetros en la varieble $params
  $metodo = ConfigApp::$ACTIONS[$action];
  // declara una variable para almacenar la acción (about)
    if(isset($params) && $params != null){

      echo $metodo($params);

    }
  else{
  echo $metodo();

  }
  }


  // $actions = explode('/', $_GET['action']); //separa action con una barra

//   if($actions[ACTION] === 'sumar') { // dice action en la posición cero va a ser sumar
//     echo sumar($actions[VALOR1], $actions[VALOR2]);
//   }
//   else {
//     if($actions[ACTION] === 'about') { // action en la posición cero va a ser about
//       if(isset($actions[VALOR1])) {
//         echo about($actions[VALOR1]);
//       }
//       else {
//         echo about();
//       }
//     }
//     else {
//       if($actions[ACTION] === 'pi') { //action en la posición cero va a ser pi
//         echo piNumber();
//       }
//     }
//   }
// }
}
?>
