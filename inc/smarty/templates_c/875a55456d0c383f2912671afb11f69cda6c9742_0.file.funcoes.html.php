<?php /* Smarty version 3.1.27, created on 2015-11-03 00:31:42
         compiled from "view\funcoes.html" */ ?>
<?php
/*%%SmartyHeaderCode:297795637f25e6ac3f2_49688102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875a55456d0c383f2912671afb11f69cda6c9742' => 
    array (
      0 => 'view\\funcoes.html',
      1 => 1446507099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297795637f25e6ac3f2_49688102',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f25e6eac08_24349568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f25e6eac08_24349568')) {
function content_5637f25e6eac08_24349568 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '297795637f25e6ac3f2_49688102';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p>parte do sistema: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>