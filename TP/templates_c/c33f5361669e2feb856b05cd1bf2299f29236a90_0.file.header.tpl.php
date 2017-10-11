<?php
/* Smarty version 3.1.30, created on 2017-10-10 22:43:57
  from "C:\xampp\htdocs\web\TP_especial\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd310d4a4835_81397576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33f5361669e2feb856b05cd1bf2299f29236a90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP_especial\\templates\\header.tpl',
      1 => 1507668234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd310d4a4835_81397576 (Smarty_Internal_Template $_smarty_tpl) {
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
      <ul>
        <?php if ($_smarty_tpl->tpl_vars['invitado']->value) {?>
        <li>usuario: <?php echo $_smarty_tpl->tpl_vars['invitado']->value;?>
</li>
        <?php } else { ?>
        <li>usuario: invitado</li>
        <?php }?>
      </ul>
      <a href="listaProductos">Lista de Productos</a>
    </div>
    <a href="listaCategorias">Lista de Categorias</a>
    <div>
      <div class="container">
    </div>
<?php }
}
