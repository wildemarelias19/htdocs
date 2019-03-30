<?php
//conexão com o banco SQLSERVER
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");

//conexão com o banco MYSQL
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");


$stmt = $conn->prepare("SELECT * fROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {//key é o nome da coluna, value é o valor
		echo "<strong>".$key.":</strong>".$value."<br>";
	}
	echo "=====================================================<br>";
}

//var_dump($results);
?>