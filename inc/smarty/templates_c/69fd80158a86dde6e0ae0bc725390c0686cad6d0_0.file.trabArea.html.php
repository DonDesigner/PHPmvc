<?php /* Smarty version 3.1.27, created on 2015-11-03 01:06:14
         compiled from "view\trabArea.html" */ ?>
<?php
/*%%SmartyHeaderCode:107095637fa763d6b50_51503163%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fd80158a86dde6e0ae0bc725390c0686cad6d0' => 
    array (
      0 => 'view\\trabArea.html',
      1 => 1446509171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107095637fa763d6b50_51503163',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637fa76428bf7_69017771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637fa76428bf7_69017771')) {
function content_5637fa76428bf7_69017771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '107095637fa763d6b50_51503163';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<table border='1'>
    <tr>
        <th>Trabalho</th>
        <th>Área</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['titulo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_area'];?>
</td>
        <td>Edit | <a href='?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['cod_trabalho'];?>
&del2=<?php echo $_smarty_tpl->tpl_vars['row']->value['cod_area'];?>
'>Delete</a></td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
   
</table>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>