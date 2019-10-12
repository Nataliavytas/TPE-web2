<div id="formatoTabla">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col"> Categorias </th>
<th scope="col"> Borrar </th>
<th scope="col"> Editar </th>
</tr>
</thead>
<div id="textoinicio">
   <h2> Todas las categorias. </h2>
 </div>
<tbody id="cuerpoTabla">
{foreach $categorias as $categoria }
<tr>
<td> {$categoria['nombreCat']}</td>
<form action="borrar" method="get">
<td><button value="{$borrar['id_categorias']}" type="sudmit">Borrar</button></td>
<td><button value="{$editar['id_categorias']}" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
</form>
{/foreach}
</tr>

</tbody>
</table>
</div>
