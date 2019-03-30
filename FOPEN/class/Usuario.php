<?php 

class Usuario{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

//fazendo Getters and Setters
	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdsuario($value){
		$this->idusuario = $value;
	}

	public function getDesLogin(){
		return $this->deslogin;
	}

	public function setDesLogin($value){
		$this->deslogin = $value;
	}

	public function getDesSenha(){
		return $this->dessenha;
	}

	public function setDesSenha($value){
		$this->dessenha = $value;
	}

	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	public function setDtCadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID"=>$id
		));

		//carrega os dados do banco pro objeto
		if(count($results)>0){
			$this->setData($results[0]);
		}
	}


	//criando lista com todos os usuários que estão na tabela

	public static function getList(){
		$sql = new Sql();
		return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
		
	}

	//para buscar um usuário
	public static function search($login){

		$sql = new Sql();
		return $sql -> select ("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
			':SEARCH' => "%".$login."%"
		));
	}


	public function login($login,$password){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		//carrega os dados do banco pro objeto
		if(count($results)>0){
			$this->setData($results[0]);
		}else{
			throw new Exception("Login e/ou senha inválidos", 1);
			
		}
	}


	public function setData($data){
		$this->setIdsuario($data['idusuario']);
		$this->setDesLogin($data['deslogin']);
		$this->setDesSenha($data['dessenha']);
		$this->setDtCadastro(new DateTime($data['dtcadastro']));
	}


//criando usuario novo usando insert
public function insert(){

	$sql = new Sql();
	$results = $sql->select("CALL sp_usuarios_insert(:LOGIN,:PASSWORD)",array(
		':LOGIN'=>$this->getDesLogin(),
		':PASSWORD'=>$this->getDesSenha()
	));
	if(count($results)>0){
		$this->setData($results[0]);
	}
}


	public function update($login,$password){

		$this->setDesLogin($login);
		$this->setDesSenha($password);
		$sql = new Sql();
		$sql-> query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID",array(
			":LOGIN"=>$this->getDesLogin(),
			":PASSWORD"=>$this->getDesSenha(),
			":ID"=>$this->getIdusuario()
		));
	}


	public function delete(){

		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			':ID'=>$this->getIdusuario()
		));

		$this->setIdsuario(0);
		$this->setDesLogin("");
		$this->setDesSenha("");
		$this->setDtCadastro(new DateTime());

	}

	//método construtor
	public function __construct($login="",$password=""){
		$this->setDesLogin($login);
		$this->setDesSenha($password);
	}




	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDesLogin(),
			"dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}

}




 ?>