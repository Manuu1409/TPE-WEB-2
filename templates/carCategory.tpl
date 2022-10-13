{include file="header.tpl"}

<h1 class="text-center">Categorias de autos ford </h1>

<div class="card">
 {foreach from=$categorias item=$categoria}
  
   <div class="card-body">
     <h3 class="card-title">{$categoria->nombre}</h3>
     <p class="text-center">{$categoria->descripcion}</p>
     <a  type="button" class="btn btn-success" href="lista/{$categoria->id}">Ver mas</a>
     {if (isset($smarty.session.IS_LOGGED))}
     <a  type='button' class="btn btn-warning" href="categoria/{$categoria->id}">Editar</a>
     <a  class="btn btn-info" aria-current="page" href="borrarcategoria/{$categoria->id}">Borrar</a>
     {{/if}}
   </div>
 {/foreach}
</div>

<p class="mt-3"><b>Mostrando {$count} Categorias</b></p>

{include file="footer.tpl"}
