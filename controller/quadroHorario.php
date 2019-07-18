<?php 

$interativo = 'Interativo';
$dia = 'Segunda';

class QuadroHorario{
	private $horario;

	public function QuadroHorarioVer(){
		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("SELECT * FROM aluno_curs WHERE CURSE = :curso AND dia = :dia AND horario = :horario");
		$stmt->bindParam(":curso", $curso);
		$stmt->bindParam(":dia", $dia);
		$stmt->bindParam(":horario", $horario);
		$curso = 'Informix';
		$dia = 'Segunda';
		$horario = '08:00 - 09:00';
		$stmt->execute();
		$total = $stmt->rowCount();
		echo $total;
	}

	public function QdhBeleza(){
		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("SELECT * FROM aluno_curs WHERE CURSE = :curso AND dia = :dia AND horario = :horario");
		$stmt->bindParam(":curso", $curso);
		$stmt->bindParam(":dia", $dia);
		$stmt->bindParam(":horario", $horario);
		$curso = 'Web Designer';
		$dia = 'Segunda';
		$horario = '08:00 - 09:00';
		$stmt->execute();
		$total = $stmt->rowCount();
		echo $total;
	}
}
?>