<?php

declare(strict_types = 1);
include 'class-autoload.inc.php';

$oper = $_POST['oper'];
$inputOne = $_POST['inputOne'];
$inputTwo = $_POST['inputTwo'];

$calc = new Calc($oper, (int)$inputOne, (int)$inputTwo);

try {
   echo $calc->calculator();
} catch (TypeError $e) {
    echo "Error : " . $e->getMessage();
} 

?>