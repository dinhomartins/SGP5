<?php 

// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}

class SaveCurse{

	private $id;
	private $name;
	private $curse;

	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setCurse($curse){
		$this->curse = $curse;
	}

	public function saveCurseQuery(){
		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("INSERT INTO aluno_curs(ID_ALUNO, NAME, CURSE ) VALUES (:id_aluno, :name, :curse) ");
		$stmt->bindParam(":id_aluno", $this->id);
		$stmt->bindParam(":name", $this->name);
		$stmt->bindParam("curse", $this->curse);
		$stmt->execute();
		echo "<script type=\"text/javascript\">alert('Adicionado com sucesso !');</script>";
		echo '<meta http-equiv="refresh" content="2;URL=../view/add_curse.php" />';
	}
}

$aluno = new SaveCurse();
$aluno->setId($_POST['id']);
$aluno->setName($_POST['nome']);
$aluno->setCurse($_POST['curse']);
$aluno->saveCurseQuery();


?>