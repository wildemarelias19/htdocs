<?php

class Pessoa { //Classe
	public $nome; //atributo

	public function falar(){ //Método
		return "O meu nome é " .$this->nome;
	}
}

$Elias = new Pessoa();
$Elias->nome="Wildemar Elias";

echo $Elias->falar();


?>