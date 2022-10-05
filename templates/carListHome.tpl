{include file="header.tpl"}



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
      <td>{$car->nombre}</td>
      <td>{$car->fecha}</td>
      <td>{$car->color}</td>
      <td>{$car->prioridad}</td>
      <td></td>  
    </tr>
  {/foreach}
  </tbody>
  
</table>

<p class="mt-3"><b>Mostrando {$count} listas de autos</b></p>