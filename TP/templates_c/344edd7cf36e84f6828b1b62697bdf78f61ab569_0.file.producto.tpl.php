<?php
/* Smarty version 3.1.30, created on 2017-10-09 20:26:40
  from "C:\xampp\htdocs\web\mvc\templates\producto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dbbf601821e6_26487825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344edd7cf36e84f6828b1b62697bdf78f61ab569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\producto.tpl',
      1 => 1507573597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dbbf601821e6_26487825 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li class="list-group-item">
        <?php if (!$_smarty_tpl->tpl_vars['producto']->value['categoria']) {?>
          <s><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</s>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>

        <?php }?>
        <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <!-- <a href="finalizarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> -->
        <!-- <a href="finalizarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><img src="/open-iconic/svg/circle-x.svg"></a> -->
    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
