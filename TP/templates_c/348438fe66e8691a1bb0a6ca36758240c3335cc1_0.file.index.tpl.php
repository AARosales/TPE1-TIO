<?php
/* Smarty version 3.1.30, created on 2017-10-09 00:44:58
  from "C:\xampp\htdocs\web\mvc\templates\Detalle\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59daaa6aef5356_29987393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348438fe66e8691a1bb0a6ca36758240c3335cc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\Detalle\\index.tpl',
      1 => 1507502617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Detalle\\detalle.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59daaa6aef5356_29987393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Detalles</h1>
          <a href="agregarDetalle">Agregar Detalle</a> |
          <?php $_smarty_tpl->_subTemplateRender("file:Detalle\detalle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
