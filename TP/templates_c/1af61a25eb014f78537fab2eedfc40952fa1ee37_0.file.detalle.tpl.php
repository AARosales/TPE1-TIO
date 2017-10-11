<?php
/* Smarty version 3.1.30, created on 2017-10-10 01:33:58
  from "C:\xampp\htdocs\web\mvc\templates\Detalle\detalle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dc076666e6a6_68569132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af61a25eb014f78537fab2eedfc40952fa1ee37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\Detalle\\detalle.tpl',
      1 => 1507592033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dc076666e6a6_68569132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalles']->value, 'detalle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['detalle']->value) {
?>
      <li class="list-group-item">
        <?php if ($_smarty_tpl->tpl_vars['detalle']->value['stock']) {?>
          <s><ul><b><?php echo $_smarty_tpl->tpl_vars['detalle']->value['categoria'];?>
</b>; $<?php echo $_smarty_tpl->tpl_vars['detalle']->value['precio'];?>
 - Colores: <?php echo $_smarty_tpl->tpl_vars['detalle']->value['color'];?>
 - Talles: <?php echo $_smarty_tpl->tpl_vars['detalle']->value['talle'];?>
</s>
          <a href="borrarDetalle/<?php echo $_smarty_tpl->tpl_vars['detalle']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          <a href="finalizarDetalle/<?php echo $_smarty_tpl->tpl_vars['detalle']->value['id'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></ul>
        <?php } else { ?>
            <ul><b><?php echo $_smarty_tpl->tpl_vars['detalle']->value['categoria'];?>
</b>; $<?php echo $_smarty_tpl->tpl_vars['detalle']->value['precio'];?>
 - Colores: <?php echo $_smarty_tpl->tpl_vars['detalle']->value['color'];?>
 - Talles: <?php echo $_smarty_tpl->tpl_vars['detalle']->value['talle'];?>

              <a href="borrarDetalle/<?php echo $_smarty_tpl->tpl_vars['detalle']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              <a href="finalizarDetalle/<?php echo $_smarty_tpl->tpl_vars['detalle']->value['id'];?>
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
