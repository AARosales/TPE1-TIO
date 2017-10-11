<?php
/* Smarty version 3.1.30, created on 2017-10-10 21:34:56
  from "C:\xampp\htdocs\web\TP_especial\templates\categoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd20e076c122_58296828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7afea1d0e6f701a5ab028c3c705d09bcb0d6ab32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP_especial\\templates\\categoria.tpl',
      1 => 1507647519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd20e076c122_58296828 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <li class="list-group-item">
        <?php if (!$_smarty_tpl->tpl_vars['categoria']->value['nombre']) {?>
          <s><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 : <?php echo $_smarty_tpl->tpl_vars['categoria']->value['descripcion'];?>
</s>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 : <?php echo $_smarty_tpl->tpl_vars['categoria']->value['descripcion'];?>

        <?php }?>
        <a href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
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
