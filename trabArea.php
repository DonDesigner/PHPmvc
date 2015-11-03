<?php
require_once 'sm.php';
require_once 'core/TrabAreas.php';


$ta = new TrabAreas();
if(isset($_GET['del'])&& isset($_GET['del2'])){
    $ta->setCodTrabalho($_GET['del']);
    $ta->setCodArea($_GET['del2']);
    $ta->delete();
}

$sm->assign("lista", $ta->selectInner());




$sm->assign('nome','Trabalhos e Áreas');
$sm->display('trabArea.html');