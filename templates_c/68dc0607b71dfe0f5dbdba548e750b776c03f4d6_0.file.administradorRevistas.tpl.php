<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:00:46
  from 'C:\xampp\htdocs\TPE\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da865fe8531d9_38816830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68dc0607b71dfe0f5dbdba548e750b776c03f4d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administradorRevistas.tpl',
      1 => 1571317244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
  ),
),false)) {
function content_5da865fe8531d9_38816830 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2><a href="revistas" type="button" class="btn btn-outline-secondary">Revistas</a> Revistas publicadas <a href="categorias" type="button" class="btn btn-outline-secondary">Categorias</a></h2>

        </div>

          <form id="formview" action="insertar" method="post">
              <div class="form-group">
                  <label> Titulo de Revista a publicar: </label>
                  <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
              </div>
              <div class="form-group">
                  <label> Descripción de la Revista: </label>
                  <input type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
              </div>
              <div class="form-group">
                  <label> Fecha de publicación: </label>
                  <input type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
          </form>
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
