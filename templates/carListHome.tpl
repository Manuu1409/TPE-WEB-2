{include file="header.tpl"}

<table class="table">

  <thead>
    <tr>
      <th scope="col">Nombre del auto</th>
      <th scope="col">Fecha de lanzamiento</th>
      <th scope="col">Color</th>
      
    </tr>
  </thead>
  
  <tbody>
  {foreach from=$cars item=$car}

    <tr class="p-3 mb-2 bg-secondary text-white">
      <td >{$car->nombre}</td>
      <td>{$car->fecha}</td>
      <td>{$car->color}</td>
    </tr>
  {/foreach}
  </tbody>
  
</table>

<p class="mt-3"><b>Mostrando {$count} autos</b></p>

{include file="footer.tpl"}
