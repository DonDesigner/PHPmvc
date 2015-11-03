<?php /* Smarty version 3.1.27, created on 2015-11-03 01:37:45
         compiled from "view\trabArea.html" */ ?>
<?php
/*%%SmartyHeaderCode:17188563801d97c5c20_00843992%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fd80158a86dde6e0ae0bc725390c0686cad6d0' => 
    array (
      0 => 'view\\trabArea.html',
      1 => 1446511058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17188563801d97c5c20_00843992',
  'variables' => 
  array (
    'lst' => 0,
    't' => 0,
    'lsa' => 0,
    'a' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563801d9823842_79696648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563801d9823842_79696648')) {
function content_563801d9823842_79696648 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17188563801d97c5c20_00843992';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<form method="post">
    <label>Trabalho:</label>
        <select name="trabalho">
            <?php
$_from = $_smarty_tpl->tpl_vars['lst']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['t']->value['cod_trabalho'];?>
'><?php echo $_smarty_tpl->tpl_vars['t']->value['titulo'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
        </select>
    <br/>
    
    <label>Área:</label>
        <select name="area">
            <?php
$_from = $_smarty_tpl->tpl_vars['lsa']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['a']->value['cod_area'];?>
'><?php echo $_smarty_tpl->tpl_vars['a']->value['nome_area'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
        </select>
    <br/>   
    <input type='submit' value='salvar'>
</form>
<hr/>
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