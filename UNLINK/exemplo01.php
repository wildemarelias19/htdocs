<?php 
$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "Arquivo Removido com Sucesso!";



 ?>