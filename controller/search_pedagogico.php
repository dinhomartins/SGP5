<?php 

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

class Search{

	private $nome;

	public function setNome($nome){
		$this->nome = '%'.$nome.'%';
	}

	public function searchAluno(){
		$objDb = new Conect();
		$con = $objDb->MysqlCon();
		$stmt = $con->prepare("SELECT * FROM aluno_curs where NAME LIKE :nome ");
		$stmt->bindParam(":nome", $this->nome);
		$stmt->execute();
		while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo '<table class="table table-bordered">';
			echo '<thead>';
				echo '<tr>';
					echo '<th scope="col">Nome</th>';
					echo '<th scope="col">Curso cadastrado</th>';
				echo '</tr>';
			echo '</thead>';

			echo '<tbody>';
				echo '<tr>';
					echo '<td style="width:50%" >'.$dados['NAME'].'</td>';
					echo '<td>' .$dados['CURSE']. '</td>';
					

					 
					
				echo ' </tr>';
			echo '</tbody>';
			echo '</table>';
		}	
	}
}

$aluno = new Search();
$aluno->setNome($_POST['nome']);
$aluno->searchAluno();
?>