<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:28:01
  from 'C:\xampp\htdocs\TPE\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da86c61962bf3_72821802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '672b3a3f6d6b7bf76bcb2a87921625d872db084d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administrador.tpl',
      1 => 1571318874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h2.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da86c61962bf3_72821802 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:h2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
        </div>

       <form  method="post">
         <div class="form-group">
           <label for="email">Email address:</label>
           <input type="email" class="form-control" id="email">
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password">
         </div>
            <button type="submit" class="btn-success">Submit</button>
        </form>
          

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
