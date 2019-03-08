<?php

$nome= "Elias";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){

	$nome = " Cunha";
	echo $nome." agora no teste2";

}

teste();

teste2();

?>