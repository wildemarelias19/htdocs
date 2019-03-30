<?php

 $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");


//abrir transação
 $conn->beginTransaction();
//-------
 $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

 $id = 3;

$stmt->execute(array($id)); //array($id) ===>>> '?' que está no prepare

//$conn->rollback(); //cancela se der errado

$conn->commit(); //commit se der certo

echo "Delete OK";

?>