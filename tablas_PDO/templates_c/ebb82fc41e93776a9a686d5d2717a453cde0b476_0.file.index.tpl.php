<?php
/* Smarty version 3.1.30, created on 2017-09-21 21:52:56
  from "C:\xampp\htdocs\proyectos\tablas_PDO\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c41898dc3990_77060525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb82fc41e93776a9a686d5d2717a453cde0b476' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tablas_PDO\\templates\\index.tpl',
      1 => 1506023573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59c41898dc3990_77060525 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\proyectos\\tablas_PDO\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <h1>Lista de Tareas</h1>
       <ul class="list-group">

         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'itemTarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemTarea']->value) {
?>
         <li class="list-group-item">
           <?php if ($_smarty_tpl->tpl_vars['itemTarea']->value['completado']) {?>
            <s><?php echo mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['itemTarea']->value['titulo'],20), 'UTF-8');?>
 : <?php echo $_smarty_tpl->tpl_vars['itemTarea']->value['descripcion'];?>
</s>
           <?php } else { ?>
            <?php echo mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['itemTarea']->value['titulo'],20), 'UTF-8');?>
 : <?php echo $_smarty_tpl->tpl_vars['itemTarea']->value['descripcion'];?>

           <?php }?>
           <a href="borrarTarea/<?php echo $_smarty_tpl->tpl_vars['itemTarea']->value['id'];?>
"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
         </li>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<!-- <?php echo '<?php
';?>foreach ($tareas as $tarea) {
  if ($tarea['completado']){
    echo '<li class="list-group-item"><s>'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>';
  }
  else{
    echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'<a href="borrarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a href="finalizarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
  }
}
<?php echo '?>';?> -->

</ul>
      <form action="agregarTarea" method="post">
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la tarea">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50"></textarea>
        </div>
        <div class="form-group">
          <label for="completado">Completada</label>
          <input type="checkbox" id="completado" name="completado" value="1">
        </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </form>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
