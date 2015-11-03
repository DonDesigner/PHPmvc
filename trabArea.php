<?php
require_once 'sm.php';
require_once 'core/TrabAreas.php';
require_once 'core/Trabalhos.php';
require_once 'core/Areas.php';

$ta = new TrabAreas();
$t = new Trabalhos();
$a = new Areas();

$sm->assign('lsa', $a->select());
$sm->assign('lst', $t->select());


if(isset($_GET['del'])&& isset($_GET['del2'])){
    $ta->setCodTrabalho($_GET['del']);
    $ta->setCodArea($_GET['del2']);
    $ta->delete();
}

if(isset($_POST['trabalho']) and isset($_POST['area']) and !isset($_GET['edit'])){
    $ta->setCodArea($_POST['area']);
    $ta->setCodTrabalho($_POST['trabalho']);
    $ta->insert();
}

$sm->assign("lista", $ta->selectInner());




$sm->assign('nome','Trabalhos e Áreas');
$sm->display('trabArea.html');