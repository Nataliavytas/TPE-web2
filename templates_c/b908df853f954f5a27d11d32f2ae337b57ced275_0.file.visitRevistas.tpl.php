<?php
/* Smarty version 3.1.33, created on 2019-09-30 23:24:30
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\visitRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d92728e8bfc49_09780100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b908df853f954f5a27d11d32f2ae337b57ced275' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\visitRevistas.tpl',
      1 => 1569878667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d92728e8bfc49_09780100 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
              <form id="formview" action="insertar" method="post">
                  <div class="form-group">
                      <label for="inputState">Filtrar por:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Todas </option>
          <option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
          <option> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
 </option>

          </option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </select>
       </div>
       </form>
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
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
       <tr>
       <td> <a href="detalleRevistas/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revista'];?>
"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </a></td>
       <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
       <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </tr>
       </tbody>
       </table>
       </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </body>
     </html>
<?php }
}
