<?php


function ola($texto,$periodo= "Bom dia"){//parametros sem valor padrão, colonar na esquerda
	return "ola $texto! $periodo! <br>";

}

echo ola("Mundo","Bom dia");
echo ola("Elias", "Boa noite");
echo ola("Michelle", "Boa tarde");
?>