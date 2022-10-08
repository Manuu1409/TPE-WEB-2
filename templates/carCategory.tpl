{include file="header.tpl"}


<h1>Categorias de autos ford </h1>

<table class="table">

  <tbody>
  {foreach from=$categorias item=$categoria}
    <tr>
      <td>{$categoria->nombre}</td>
  {/foreach}
  </tbody>
  
</table>

<p class="mt-3"><b>Mostrando {$count} Categorias</b></p>