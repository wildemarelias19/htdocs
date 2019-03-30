<?php
echo 'Current PHP version: '. phpversion();
$conn = new mysqli("localhost","root","","dbphp7"); //conexão com o banco MYSQL

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
}

//fazendo insert no banco
$stmt = $conn-> prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(?,?)");

//trocando valores da '?' para o banco
$stmt->bind_param("ss", $login , $pass); //"ss" string, string

$login = "user";
$pass = "12345";


//enviando para o banco
$stmt->execute();

$login = "root";
$pass = "afeof";

$stmt->execute();

?>