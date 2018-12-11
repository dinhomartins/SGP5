<?php 
	require_once('db.class.php');

	class RecordClass{

		private $curso;
		private $sala;
		private $dia;
		private $horario;

		public function setCurso($curso){
			$this->curso = $curso;
		}
		public function setSala($sala){
			$this->sala = $sala;
		}
		public function setDia($dia){
			$this->dia = $dia;
		}
		public function setHorario($horario){
			$this->horario = $horario;
		}

		public function ClassRecord(){
			$objDb = new ConectionDb();
			$con = $objDb->ConectMysql();
			$stmt = $con->prepare("INSERT INTO turmas (curso, sala, dia, semana)VALUES(:curso, :sala, :dia, :semana) ");
			$stmt->bindParam(":curso", $this->curso);
			$stmt->bindParam(":sala", $this->sala);
			$stmt->bindParam(":dia", $this->dia);
			$stmt->bindParam(":semana", $this->horario);
			$stmt->execute();
			echo 'Registrado com sucesso !';
		}
	}

$aluno = new RecordClass();
$aluno->setCurso($_POST['curso']);
$aluno->setSala($_POST['sala']);
$aluno->setDia($_POST['dia']);
$aluno->setHorario($_POST['horario']);
$aluno->ClassRecord();
?>

 