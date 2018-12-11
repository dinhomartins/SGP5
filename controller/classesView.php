<?php 
	echo 'Todas as turmas cadastradas';

	require_once('db.class.php');

	class ViewTurmas{

		private $turma;

		public function TurmasView(){
			$objDb = new ConectionDb();
			$con = $objDb->ConectMysql();
			$stmt = $con->prepare("SELECT * FROM turmas");
			$stmt->execute();
			while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo '<br>';
				echo $result['curso'];
				echo ' ';
				echo $result['dia'];
				echo ' ';
				echo $result['sala'];
			}
		}
	}
	$turma = new ViewTurmas();
	$turma->TurmasView();
?>
