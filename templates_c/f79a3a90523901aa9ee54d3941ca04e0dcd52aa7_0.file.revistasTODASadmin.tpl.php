<?php
/* Smarty version 3.1.33, created on 2019-10-12 17:33:31
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\revistasTODASadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da1f24bb1a4d7_46585313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79a3a90523901aa9ee54d3941ca04e0dcd52aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\revistasTODASadmin.tpl',
      1 => 1570894409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da1f24bb1a4d7_46585313 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="formatoTabla">
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
<tr>
<td> <a href="detalleRevistas/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </a></td>
<td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
<td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
<form action="borrar" method="get">
<td><button value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" type="sudmit">Borrar</button></td>
<td><button value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

</tbody>
</table>
</div>
<?php }
}
