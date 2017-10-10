<?php

function home()
{
return '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
  </head>
  <body>
    <a href="#">Home</a>
    <a href="about">About</a>
    <a href="about/sb">About-SB</a>
    <a href="pi">Número Pi</a>
    <br></br>
    <h1>Ingrese dos sumeros para ser sumados</h1>
    <form class="" action="sumar" method="get">
      <label for="a">Primer sumando</label>
      <input type="number" id="a" name="a">
      <br></br>
      <label for="b">Segundo sumando</label>
      <input type="number" id="b" name="b">
      <br></br>
      <button type="submit" name="">Sumar</button>
    </form>
  </body>
</html>
';

}

 ?>
