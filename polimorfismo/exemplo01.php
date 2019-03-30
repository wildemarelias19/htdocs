<?php

abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}


class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	public function mover(){ //parent refere-se a classe pai
		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();
$garfield = new Gato();
$ave = new Passaro();


echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "-------------------<br>";
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";
echo "-------------------<br>";
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";


?>