{include file="header.tpl"}
   <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <h1>Lista de Tareas</h1>
       <ul class="list-group">

         {foreach from=$tareas item=itemTarea}
         <li class="list-group-item">
           {if $itemTarea['completado']}
            <s>{$itemTarea['titulo']|truncate:20|upper} : {$itemTarea['descripcion']}</s>
           {else}
            {$itemTarea['titulo']|truncate:20|upper} : {$itemTarea['descripcion']}
           {/if}
           <a href="borrarTarea/{$itemTarea['id']}"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
         </li>
           {/foreach}
<!-- <?php
foreach ($tareas as $tarea) {
  if ($tarea['completado']){
    echo '<li class="list-group-item"><s>'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>';
  }
  else{
    echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'<a href="borrarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a href="finalizarTarea/'.$tarea ['id'].'"<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
  }
}
?> -->

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
  {include file="footer.tpl"}
