<?php
/* Smarty version 3.1.30, created on 2017-10-10 21:54:49
  from "C:\xampp\htdocs\web\TP_especial\templates\Producto\producto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd2589e6e108_46520238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2228b15c9115bb3d0bc6d8b275c5f9c40b9d3864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP_especial\\templates\\Producto\\producto.tpl',
      1 => 1507649841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd2589e6e108_46520238 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li class="list-group-item">
        <?php if ($_smarty_tpl->tpl_vars['producto']->value['stock']) {?>
          <s><ul><b><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</b> $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
 - Colores: <?php echo $_smarty_tpl->tpl_vars['producto']->value['color'];?>
 - Talles: <?php echo $_smarty_tpl->tpl_vars['producto']->value['talle'];?>
</s>
          <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          <a href="finalizarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></ul>
        <?php } else { ?>
            <ul><b><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</b> $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
 - Colores: <?php echo $_smarty_tpl->tpl_vars['producto']->value['color'];?>
 - Talles: <?php echo $_smarty_tpl->tpl_vars['producto']->value['talle'];?>

              <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              <a href="finalizarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></ul>
        <?php }?>

    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
