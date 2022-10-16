
{include file="header.tpl"}

{include file="form_cars.tpl"}

<table class="table">

  <thead>
    <tr>
      <th scope="col">Nombre del auto</th>
      <th scope="col">Fecha de lanzamiento</th>
      <th scope="col">Color</th>
      <th scope="col">Prioridad</th>
    </tr>
  </thead>

  <tbody>
   {foreach from=$cars item=$car}
     <tr>
       <td >{$car->nombre}</td>
       <td>{$car->fecha}</td>
       <td>{$car->color}</td>
       <td>{$car->prioridad}</td>
       {if (isset($smarty.session.IS_LOGGED))}
       <td> <a href='borrarauto/{$car->id}' type='button' class='btn btn-danger'>Borrar</a></td>  
       <td> <a href='auto/{$car->id}' type='button' class="btn btn-warning">Editar</a></td>  
       {/if}
     </tr>
   {/foreach}
  </tbody>
  
</table>





