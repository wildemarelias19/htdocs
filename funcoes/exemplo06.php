<?php

$pessoa = array(
	'nome' => 'Elias',
	'idade' => 28
);

foreach ($pessoa as $value){
	if(gettype($value) === 'integer') $value +=10;
	echo $value . "<br>";
}

print_r($pessoa);


?>