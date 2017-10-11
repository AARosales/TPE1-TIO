<?php
/* Smarty version 3.1.30, created on 2017-10-10 02:21:13
  from "C:\xampp\htdocs\web\mvc\templates\formCrear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dc127963c3a8_93908098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed5c6464cba83a1f405cd6b80be16ac9d232133b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\formCrear.tpl',
      1 => 1507593558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dc127963c3a8_93908098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <h1>Nueva Categoria</h1>
    <form action="guardarCategoria" method="post">
      <div class="form-group">
        <label for="nombre"></label>
        <input type="text" class="form-control" id="nombre" name="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" placeholder="Nombre del producto">
      </div>
      <div class="form-group">
        <label for="descripcion"></label>
        <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50" placeholder="Descripción del producto"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</textarea>
      </div>
      <button type="submit" class="btn btn-default">Crear</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
