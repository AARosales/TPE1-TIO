<?php
/* Smarty version 3.1.30, created on 2017-10-09 20:55:14
  from "C:\xampp\htdocs\web\mvc\templates\formCrearDetalle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dbc612cc53c1_07602917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926fe7b5db28fe4327bfab87e99273ca70eca20d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\mvc\\templates\\formCrearDetalle.tpl',
      1 => 1507575311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dbc612cc53c1_07602917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <h1>Nuevo Detalle</h1>
    <form action="guardarDetalle" method="post">
      <div class="form-group">
        <label for="id_producto"></label>
        <select name='id_producto'>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
           <option value= '<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
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
      <button type="submit" class="btn btn-default">Crear Detalle</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
