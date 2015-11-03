<?php
require_once 'sm.php';
require_once 'core/Areas.php';

$a = new Areas();

if(isset($_GET['del'])){
    $a->setCodArea($_GET['del']);
    $a->delete();
}



$sm->assign('lista', $a->select());


$sm->assign('nome','Areas');
$sm->display('area.html');



