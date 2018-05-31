<?php

require_once 'class/Imovel.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = 1;

$imovel = new Imovel($id);

var_dump($imovel);