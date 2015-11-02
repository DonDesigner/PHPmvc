<?php /* Smarty version 3.1.27, created on 2015-11-02 22:48:02
         compiled from "C:\xampp\htdocs\phpmvc\view\cabecalho.html" */ ?>
<?php
/*%%SmartyHeaderCode:1435637da12c071c0_23854107%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b571aeb78db9c37427ca35f757ff26116e0a2a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\view\\cabecalho.html',
      1 => 1446497242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1435637da12c071c0_23854107',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5637da12c12d50_71587883',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637da12c12d50_71587883')) {
function content_5637da12c12d50_71587883 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1435637da12c071c0_23854107';
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
        <a href="trabalhos.php">trabalhos</a> | 
        <a href="trabalhos_eventos.php">Trabalhos Eventos</a> | 
        <a href="trabalhos_areas.php">Trabalho Areas</a>
        <hr/>
        </div>
        
        <div><?php }
}
?>