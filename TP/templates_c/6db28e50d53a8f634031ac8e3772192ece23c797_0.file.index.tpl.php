<?php
/* Smarty version 3.1.30, created on 2017-10-10 21:54:15
  from "C:\xampp\htdocs\web\TP_especial\templates\Login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd25678ccca0_16561583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db28e50d53a8f634031ac8e3772192ece23c797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP_especial\\templates\\Login\\index.tpl',
      1 => 1507587172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_59dd25678ccca0_16561583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <form action="verificarUsuario" method="post">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
              <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <button type="submit" class="btn btn-default">-Admin-</button>
          </form>
          <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div role="EnterVisiter"></div><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>

          <button type="submit" class="btn btn-default">Invitado</button>
        </div>


      </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
