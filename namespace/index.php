<?php
require_once("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();

$cad->setNome("Wildemar Elias");

$cad->setEmail("wildemar-elias@live.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>