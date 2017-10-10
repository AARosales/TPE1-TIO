<?php

function sumar($sumandos)
{
  $resultado = array_sum($sumandos);
  return "La suma de ". implode("+", $sumandos)." fue $resultado";
}

 ?>
