<div id="formatoTabla">
  <form action="showDetalle" method="get">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col"> Titulo </th>
<th scope="col"> Descripción </th>
<th scope="col"> Fecha </th>
</tr>
</thead>
<tbody id="cuerpoTabla">
{foreach $revistas as $revista }
<tr>
<td> <button name="conseguirDetalle" value="{$revista['id_revistas']}" href="detalleRevistas/{$revista['id_revistas']}">{$revista['titulo']} </button></td>
<td> {$revista['descripcion']}</td>
<td> {$revista['fecha']}</td>
{/foreach}
</tr>
</tbody>
</table>
</form>
</div>
