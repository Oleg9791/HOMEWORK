<?php
include "vendor/autoload.php";

use Classes\Polindrom;

$pol = new Polindrom();
//print_r($pol->setStr("illi")->getRevers()) ;
echo $pol->setStr("alal")->getRevers() ;
