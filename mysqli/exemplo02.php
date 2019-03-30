<?php

$conn = new mysqli("localhost","root","","dbphp7"); //conexão com o banco

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
}

//fazendo SELECT no banco

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//colocando no JSON

$data = array();

while ($row = $result->fetch_assoc()){//enquanto olhar para o BD e tiver resultado
	array_push($data, $row);
}

echo json_encode($data);

?>