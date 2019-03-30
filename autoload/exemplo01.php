<?php

function __autoload($nomeClasse){
	//var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	//var_dump($nomeClasse);
}
//require_once("DelRay.php");
$carro = new DelRay();

$carro->acelerar(80);


?>