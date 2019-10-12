<div id="formatoTabla">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col"> Titulo </th>
<th scope="col"> Descripción </th>
<th scope="col"> Fecha </th>
<th scope="col"> Borrar </th>
<th scope="col"> Editar </th>
</tr>
</thead>
<div id="textoinicio">
   <h2> Todas las revistas. </h2>
 </div>
<tbody id="cuerpoTabla">
{foreach $revistas as $revista }
<tr>
<td> <a href="detalleRevistas/{$revista['id_revistas']}">{$revista['titulo']} </a></td>
<td> {$revista['descripcion']}</td>
<td> {$revista['fecha']}</td>
<form action="borrar" method="get">
<td><button value="{$revista['id_revistas']}" type="sudmit">Borrar</button></td>
<td><button value="{$revista['id_revistas']}" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
</form>
{/foreach}
</tr>

</tbody>
</table>
</div>
