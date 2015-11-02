<?php
require_once 'sm.php';
require_once 'core/Areas.php';

$a = new Areas();
$sm->assign('lista', $a->select());


$sm->assign('nome','Areas');
$sm->display('area.html');



