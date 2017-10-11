<?php
/* Smarty version 3.1.30, created on 2017-10-10 21:34:56
  from "C:\xampp\htdocs\web\TP_especial\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd20e0428157_07953450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7addc85e6d29fcc8e00a127ce10e675520fa80e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP_especial\\templates\\index.tpl',
      1 => 1507594979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:categoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dd20e0428157_07953450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Categorias</h1>
          <a href="agregarCategoria">Agregar Categoria</a>
          <?php $_smarty_tpl->_subTemplateRender("file:categoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
