<?php
/*
 * Este arquivo configura a inicialização do Smarty
 */

require_once 'inc/smarty/libs/Smarty.class.php';
$sm = new Smarty();


$sm->setCompileDir('inc/smarty/templates_c/');
$sm->setTemplateDir('view/');
$sm->setCacheDir('inc/smarty/cache/');
$sm->setConfigDir('inc/smarty/configs/');
        
       
?>