<?php
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "O veiculo acelerou até " . $velocidade . " Km/h";
	}
	public function frenar($v){
		echo "O veiculo frenou até " . $v . " Km/h";
	}

	public function trocarMarcha($m){
		echo "O veiculo engatou a marcha " . $m;
	}
}



?>