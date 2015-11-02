<?php /* Smarty version 3.1.27, created on 2015-11-03 00:23:14
         compiled from "view\eventos.html" */ ?>
<?php
/*%%SmartyHeaderCode:289365637f062c67503_11452838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4c06a87f3ee64b8056e9d4691ca83665c96460' => 
    array (
      0 => 'view\\eventos.html',
      1 => 1446497321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289365637f062c67503_11452838',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f062ca9b97_00996846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f062ca9b97_00996846')) {
function content_5637f062ca9b97_00996846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '289365637f062c67503_11452838';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p >Aqui o gerencimento de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</p>
<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, para <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 em <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
!!

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
            
<?php }
}
?>