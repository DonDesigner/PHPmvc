<?php

require_once 'sm.php';
require_once 'core/trabalhos.php';


$sm->assign("nome", "Trabalhos");
$sm->display("trabalhos.html");