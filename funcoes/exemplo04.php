<?php

function ola(){

	$argumentos = func_get_args();
	return $argumentos;
}

var_dump(ola("Bom dia"));

var_dump(ola(12));


?>