<?php

require_once 'sm.php';
require_once 'core/Pessoas.php';

$sm->assign("nome", "Pessoas");
$sm->display("pessoas.html");
