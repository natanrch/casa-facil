<?php

function criaCabecalho($titulo, $cssArray) {

	$cssExtra = array();
	foreach ($cssArray as $c) {
		array_push($cssExtra, '<link rel="stylesheet" type="text/css" href="'.$c.'">');
	}
	$cssExtra = implode("", $cssExtra);
	var_dump($cssExtra);
	$cabecalho = include 'cabecalho.php';

	return $cabecalho;
}

?>