<?php
/* Smarty version 3.1.30, created on 2017-10-10 17:37:23
  from "C:\xampp\htdocs\web\mvc\templates\Producto\producto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dce933983509_58701822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8296575029aa707815492b1bc8f10222bc4a1571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\Producto\\producto.tpl',
      1 => 1507649841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dce933983509_58701822 (Smarty_Internal_Template $_smarty_tpl) {
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
