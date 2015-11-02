<?php /* Smarty version 3.1.27, created on 2015-11-03 00:34:36
         compiled from "view\pessoas.html" */ ?>
<?php
/*%%SmartyHeaderCode:236745637f30c1934c8_57484676%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5546747a63b4ff0e84be71e735e7080358a38a' => 
    array (
      0 => 'view\\pessoas.html',
      1 => 1446507169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236745637f30c1934c8_57484676',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f30c1d99d6_65464729',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f30c1d99d6_65464729')) {
function content_5637f30c1d99d6_65464729 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '236745637f30c1934c8_57484676';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p> Seção especial as <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>


<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>