<?php
/* Smarty version 3.1.30, created on 2017-10-10 02:19:55
  from "C:\xampp\htdocs\web\mvc\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dc122bd722f3_28463358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ff6b7c9a2c6bdfb8bebd42015e456c5a1c69f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\header.tpl',
      1 => 1507593925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dc122bd722f3_28463358 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div>
      <a href="logout">Logout</a>
    </div>
    <div>
      <a href="listaProductos">Lista de Productos</a>
    </div>
    <a href="listaCategorias">Lista de Categorias</a>
    <div>
      <div class="container">
    </div>
<?php }
}
