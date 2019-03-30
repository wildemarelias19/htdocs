<?php
class Pessoa{
	public $nome = "rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	}

}



class Carro{
	public $Marca = "Chevrolet";
	protected $Placa = "CPP4184";
	public $ano = 1998;

	public function verDados(){
		echo $this->Marca . "<br>";
		echo $this->Placa ."<br>";
		echo $this->ano . "<br>";
	}
}


$Carro = new Carro();

//echo $Carro->ano . "<br>";

/*echo "Ano de Fabrica: " . $Carro->ano . "<br>";
echo "Modelo: " . ($Carro->ano + 1);
*/


class Programador extends Pessoa{


	public function verDados(){
		echo get_class($this). "<br>";
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	}
}



$objeto = new Programador();

//echo $objeto->nome . "<br>";
$objeto->verDados();


//publico: todo mundo vê
//protected: na mesma classe e classe extendia; objeto NÃO vê.
//private: só na mesma classe. 
?>

