<?php
/* Smarty version 3.1.30, created on 2017-10-10 02:40:01
  from "C:\xampp\htdocs\web\mvc\templates\Producto\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dc16e1471493_36404850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e63476dede08e56ae737bfc713e094a069ca2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\Producto\\index.tpl',
      1 => 1507593452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Producto\\producto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dc16e1471493_36404850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Productos</h1>
          <a href="agregarProducto">Agregar Producto</a> |
          <?php $_smarty_tpl->_subTemplateRender("file:Producto\producto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
