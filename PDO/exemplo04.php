<?php

 $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");


 $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

 $login="Michelle";
 $password="12414";
 $id = 1;

 $stmt->bindParam(":LOGIN",$login);//bind: ligar... "ligue este parametro com este valor"

$stmt->bindParam(":PASSWORD",$password);

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Alterado OK";

?>