<?php 

//manipulando arquivos
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");


fclose($file);


echo "Arquivo Criado com Sucesso!";


 ?>