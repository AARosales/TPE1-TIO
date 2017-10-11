<?php
/* Smarty version 3.1.30, created on 2017-10-10 17:35:23
  from "C:\xampp\htdocs\web\mvc\templates\formCrearProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dce8bb285760_43489278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100215c2fb34cadc6e64cddaf96921d3e3fdb056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\formCrearProducto.tpl',
      1 => 1507649483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dce8bb285760_43489278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <h1>Nuevo Producto</h1>
    <form action="guardarProducto" method="post">
      <div class="form-group">
        <label for="id_categoria"></label>
        <select name='id_categoria'>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
           <option value= '<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
      </div>
      <div class="form-group">
        <label for="precio">Precio en Peso Argentino $</label>
        <input type="number" name="precio" id="precio" name="precio" rows="8" cols="50" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
" placeholder="Precio del producto"><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</input>
      </div>
      <div class="form-group">
        <label for="color">Colores disponibles</label>
        <input type="text" id="color" name="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" placeholder="Colores disponibles"><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</input>
      </div>
      <div class="form-group">
        <label for="talle">Talles disponibles</label>
        <input type="text" id="talle" name="talle" value="<?php echo $_smarty_tpl->tpl_vars['talle']->value;?>
" placeholder="Talles disponibles"><?php echo $_smarty_tpl->tpl_vars['talle']->value;?>
</input>
      </div>
      <div class="form-group">
        <label for="stock">Sin stock</label>
        <input type="checkbox" id="stock" name="stock" value="1">
      </div>
      <button type="submit" class="btn btn-default">Crear Producto</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
