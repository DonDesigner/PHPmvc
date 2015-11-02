<?php /* Smarty version 3.1.27, created on 2015-11-02 19:58:01
         compiled from "C:\xampp\htdocs\phpmvc\view\teste.html" */ ?>
<?php
/*%%SmartyHeaderCode:324895637b23933d726_46668489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '361a99b75da4464343aa1687c05dd176fa0138bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\view\\teste.html',
      1 => 1446490336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324895637b23933d726_46668489',
  'variables' => 
  array (
    'data' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637b23937bf31_68511519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637b23937bf31_68511519')) {
function content_5637b23937bf31_68511519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '324895637b23933d726_46668489';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Olá! Hoje é  <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, você é bem vindo</div>
    </body>
</html>
<?php }
}
?>