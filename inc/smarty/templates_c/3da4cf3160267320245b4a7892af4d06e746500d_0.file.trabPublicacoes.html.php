<?php /* Smarty version 3.1.27, created on 2015-11-03 00:46:40
         compiled from "view\trabPublicacoes.html" */ ?>
<?php
/*%%SmartyHeaderCode:51495637f5e08c40b1_35748471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da4cf3160267320245b4a7892af4d06e746500d' => 
    array (
      0 => 'view\\trabPublicacoes.html',
      1 => 1446507791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51495637f5e08c40b1_35748471',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f5e0906743_67647611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f5e0906743_67647611')) {
function content_5637f5e0906743_67647611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '51495637f5e08c40b1_35748471';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p>Lista de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>