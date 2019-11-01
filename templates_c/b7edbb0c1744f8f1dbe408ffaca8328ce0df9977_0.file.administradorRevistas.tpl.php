<?php
/* Smarty version 3.1.33, created on 2019-11-01 16:24:00
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc4e104c0528_66526134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7edbb0c1744f8f1dbe408ffaca8328ce0df9977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorRevistas.tpl',
      1 => 1572621838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbc4e104c0528_66526134 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>
      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> <a href="admin/revistas" type="button"  class="btn btn-outline-secondary" id="botonRevista">Revistas</a>
          Revistas publicadas
          <a href="admin/categorias" type="button" class="btn btn-outline-secondary" id="botonCategoria">Categorias</a> </h2>

        </div>
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
            <tbody id="cuerpoTabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
            <tr>
            <form action="admin/editar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" method="POST">

            <td>
              <a class="btn btn-light" data-toggle="collapse" href="#collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
</a>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
">
                  <div class="card card-body">
                      <input name="titulo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
"/>
                  </div>
                </div>
              </div>
            </div></td>
          <td>
            <a class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" aria-expanded="false" aria-controls="multiCollapseExample2"><?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</a>
              <div class="row">
               <div class="col">
                <div class="collapse multi-collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
">
                  <div class="card card-body">
                      <input name="descripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
"/>
                  </div>
                </div>
              </div>
              </div></td>

            <td>
                <a class="btn btn-light" data-toggle="collapse" href="collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</a>
                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
">
                        <div class="card card-body">
                          <input name="fecha" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
"/>
                        </div>
                      </div>
                    </div>
                  </div></td>

            <td><button formaction="admin/borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" formmethod="POST" class="btn btn-secondary btn-sm" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"  href="admin/borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Borrar </button></td>

            <td><button class="btn btn-secondary btn-sm" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" href="admin/editar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Editar </button></td>
            </form>
             </tr>


            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </tbody>
            </table>
                </div>
        <form id="formview" action="admin/agregarRevista" method="post">
  
                  <div class="form-group">
                      <label> Titulo de Revista a publicar: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
" name="titulo" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label> Descripción de la Revista: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
" name="descripcion" type="text" class="form-control" id="autorTabla" aria-describedby="emailHelp" placeholder="Descripcion">
                  </div>
                  <div class="form-group">
                      <label> Fecha de publicación: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
" name="fecha" type="text" class="form-control" id="tipoTabla" aria-describedby="emailHelp" placeholder="Año de publicación">
                  </div>
                  <div class="form-group">
                      <label for="inputState">Seleccione categoria:</label>
                      <select id="tipoFiltro" class="form-control" name="categoria"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
 </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </select>
                         </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
