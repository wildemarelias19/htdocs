<?php

//include "inc/exemplo01.php";
//include tenta funcionar mesmo que o arquivo esteja com problemas.

require_once "inc/exemplo01.php";
require_once "inc/exemplo01.php";
//require obriga que o arquivo exista e que esteja funcionando corretamente. usar require_once: traz somente uma vez o arquivo//

$resultado = somar(10,20);

echo $resultado;

?>