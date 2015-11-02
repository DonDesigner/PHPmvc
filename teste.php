<?php

require 'config/cfTrabalhos.php';

$cf = new cfTrabalhos();

echo "to BR 2011-09-11 -> ";
echo($cf->dateToBR("2011-09-11"));
echo("<br> To US 11/02/2012 -> ");
echo ($cf->dateToUS("11/02/2012"));
echo "<br> To Time US 11/12/2011 10:30:20 -> ";
echo $cf->dateTimeToUS("11/12/2011 10:30:20");
echo "<br> To Time BR 2011-09-11 10:30:20 -> ";
echo $cf->dateTimeToBR("2011-09-11 10:30:20");


//require_once 'db/dbConnection.php';
//$co = new dbConnection();
//$sql = "INSERT INTO areas (nome_area) VALUES ('Computação')";
//$co->RunQuery($sql);
//echo "ok";
?>
