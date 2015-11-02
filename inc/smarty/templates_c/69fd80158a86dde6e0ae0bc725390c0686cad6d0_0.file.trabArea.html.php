<?php /* Smarty version 3.1.27, created on 2015-11-03 00:46:52
         compiled from "view\trabArea.html" */ ?>
<?php
/*%%SmartyHeaderCode:57785637f5ecb6a8b9_08023434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fd80158a86dde6e0ae0bc725390c0686cad6d0' => 
    array (
      0 => 'view\\trabArea.html',
      1 => 1446506794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57785637f5ecb6a8b9_08023434',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f5ecba5246_50459687',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f5ecba5246_50459687')) {
function content_5637f5ecba5246_50459687 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57785637f5ecb6a8b9_08023434';
echo $_smarty_tpl->getSubTemplate ('view/cabecalho.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<table border='1'>
    <tr>
        <th>Trabalho</th>
        <th>Área</th>
        <th>Ações</th>
    </tr>
    
   
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
   
</table>

<?php echo $_smarty_tpl->getSubTemplate ('view/rodape.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>