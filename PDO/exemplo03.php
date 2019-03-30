<?php

 $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");


 $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN,:PASSWORD)");

 $login="elias";
 $password="123123121";

 $stmt->bindParam(":LOGIN",$login);//bind: ligar... "ligue este parametro com este valor"

$stmt->bindParam(":PASSWORD",$password);


$stmt->execute();

echo "Inserido OK";

?>