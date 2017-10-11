<?php
/* Smarty version 3.1.30, created on 2017-10-10 02:24:57
  from "C:\xampp\htdocs\web\mvc\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dc13598b4579_03826191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f18e03e7045e6037f9261371fcc0c4bea8a9be3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\index.tpl',
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
function content_59dc13598b4579_03826191 (Smarty_Internal_Template $_smarty_tpl) {
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
