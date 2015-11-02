<?php
require_once 'sm.php';

$smarty->assign("data", date('d/m/Y H:i:s'));
$smarty->assign("nome", "Diego Fernandes");

$smarty->display("view/teste.html");
?>
