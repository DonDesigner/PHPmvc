<?php
require_once 'sm.php';
require_once 'core/TrabAreas.php';


$a = new TrabAreas();
$sm->assign('lista', $a->select());


$sm->assign('nome','Trabalhos e Áreas');
$sm->display('trabArea.html');