<div id="formatoTabla">
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
<td> <a href="detalleRevistas/{$revista['id_revista']}">{$revista['titulo']} </a></td>
<td> {$revista['descripcion']}</td>
<td> {$revista['fecha']}</td>
{/foreach}
</tr>
</tbody>
</table>
</div>
