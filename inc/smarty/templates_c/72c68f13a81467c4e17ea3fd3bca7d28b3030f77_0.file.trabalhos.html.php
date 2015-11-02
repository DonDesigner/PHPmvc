<?php /* Smarty version 3.1.27, created on 2015-11-03 00:39:05
         compiled from "view\trabalhos.html" */ ?>
<?php
/*%%SmartyHeaderCode:4005637f41976aa15_84109536%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72c68f13a81467c4e17ea3fd3bca7d28b3030f77' => 
    array (
      0 => 'view\\trabalhos.html',
      1 => 1446507389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4005637f41976aa15_84109536',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f4197a9228_66995259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f4197a9228_66995259')) {
function content_5637f4197a9228_66995259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4005637f41976aa15_84109536';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p>Seção reservadas aos <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>