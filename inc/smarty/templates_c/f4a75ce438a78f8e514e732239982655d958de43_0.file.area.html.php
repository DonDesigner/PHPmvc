<?php /* Smarty version 3.1.27, created on 2015-11-02 22:49:02
         compiled from "view\area.html" */ ?>
<?php
/*%%SmartyHeaderCode:223095637da4e8f3b10_49174262%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4a75ce438a78f8e514e732239982655d958de43' => 
    array (
      0 => 'view\\area.html',
      1 => 1446500937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223095637da4e8f3b10_49174262',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637da4e941d28_38359239',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637da4e941d28_38359239')) {
function content_5637da4e941d28_38359239 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '223095637da4e8f3b10_49174262';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<table border='1'>
    <tr>
        <th>Nome da área</th>
        <th>Ações</th>        
    </tr>
      
    <?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_area'];?>
</td>
        <td>Edit | Delete</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
</table>




<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
            
<?php }
}
?>