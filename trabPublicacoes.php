<?php

require_once 'sm.php';
require_once 'core/TrabPublicacoes.php';

$sm->assign("nome", "Trabalhos Publicações");
$sm->display("trabPublicacoes.html");