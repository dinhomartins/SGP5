<?php 
 // Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
    header('Location: ../index.php?erro=1');
}

class Conect{
	public function MysqlCon(){
		try {
			$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $con;
	}
}

class InsetAluno{

	public $nome;
	public $endereco;
	public $bairro;
	public $cidade;
	public $estado;
	public $data_nasc;

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}
	public function setDataNasc($data_nasc){
		$this->data_nasc = $data_nasc;
	}
	//public function setCurso($curso){
		//$this->curso = $curso;
	//}


	public function InsertDb(){
		$objDb = new Conect();
		$con = $objDb->MysqlCon();
		$stmt = $con->prepare("INSERT INTO cadastro (nome, endereco, bairro, cidade, estado, data_nasc) VALUES (:nome, :endereco, :bairro, :cidade, :estado, :data_nasc) ");
		$stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
		$stmt->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
		$stmt->bindParam(":bairro", $this->bairro, PDO::PARAM_STR);
		$stmt->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $this->estado, PDO::PARAM_STR);
		$stmt->bindParam(":data_nasc", $this->data_nasc, PDO::PARAM_STR);
		$stmt->execute();
		echo "<script type=\"text/javascript\">alert('Cadastrado com sucesso !');</script>";
		echo '<meta http-equiv="refresh" content="2;URL=../view/home.php" />';

	}
}
if(isset($_POST['btn-submit'])){
	$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$data_nasc = $_POST['data_nasc'];

$aluno = new InsetAluno();
$aluno->setNome($nome);
$aluno->setEndereco($endereco);
$aluno->setBairro($bairro);
$aluno->setCidade($cidade);
$aluno->setEstado($estado);
$aluno->setDataNasc($data_nasc);
//$aluno->setCurso($curso);
$aluno->InsertDb();
}


?>
