<?php /* Smarty version 3.1.27, created on 2015-11-03 00:46:19
         compiled from "C:\xampp\htdocs\phpmvc\view\cabecalho.html" */ ?>
<?php
/*%%SmartyHeaderCode:135565637f5cbefd192_97300159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b571aeb78db9c37427ca35f757ff26116e0a2a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\view\\cabecalho.html',
      1 => 1446507977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135565637f5cbefd192_97300159',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637f5cbf37b24_42196154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637f5cbf37b24_42196154')) {
function content_5637f5cbf37b24_42196154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '135565637f5cbefd192_97300159';
?>
<!DOCTYPE html>

<html>
    <head>
        <title >Gerenciamento de - <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 -</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="text-align:center">Gerenciamento de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
      
        <hr>
        <div style="text-align:center">
        <a href="areas.php">Areas</a> | 
        <a href="eventos.php">Eventos</a> | 
        <a href="funcoes.php">Funções</a> |
        <a href="pessoas.php">Pessoas</a> | 
        <a href="trabalhos.php">Trabalhos</a> | 
        <a href="trabPublicacoes.php">Trabalhos Publicações</a> | 
        <a href="trabArea.php">Trabalho Areas</a>
        <hr/>
        </div>
        
        <div><?php }
}
?>