<?php 


class Listar{

	private $name;
	private $curso;
	private $dia;
	private $horario;
	public function setCurso($curso){
		$this->curso = $curso;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setDia($dia){
		$this->dia =$dia;
	}
	public function setHorario($horario){
		$this->horario = $horario;
	}

	public function ClassesLists(){
		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("SELECT * FROM aluno_curs WHERE CURSE = :curso AND dia = :dia AND horario = :horario");
		$stmt->bindParam(":curso", $this->curso);
		$stmt->bindParam(":dia", $this->dia);
		$stmt->bindParam(":horario", $this->horario );
		
		
		$stmt->execute();
?>
			
		<div class="row">
			<div class="container">
				<div class="col-md-12">
				<table class="table">
					<thead>
					    <tr>
					      <th scope="col" style="width: 25%" >Nome</th>				      
					    </tr>
				</thead>
				<tbody>
					  	<?php while ($results = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
					    <tr>
					      <td><?php echo $results['NAME']; ?></td>					     		   
					    </tr>
					    <?php endWhile ?>
					</tbody>
					</table>
				</div>
			</div>
			</div>
		<?php 	
	}
}

$aluno = new Listar();
$aluno->setCurso($_GET['curso']);
$aluno->setHorario($_GET['horario']);
$aluno->setDia($_GET['dia']);
$aluno->ClassesLists();

?>