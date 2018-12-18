<?php 


class Listar{

	private $name;
	private $curse;
	private $dia;
	private $horario;
	public function setCurse($curse){
		$this->curse = $curse;
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
		$stmt = $con->prepare("SELECT * FROM aluno_curs WHERE horario = :horario AND dia = :dia");
		$stmt->bindParam(":horario", $this->horario );
		$stmt->bindParam(":dia", $this->dia);
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
$aluno->setHorario('08:00 - 09:00');
$aluno->setDia('Segunda');
$aluno->ClassesLists();

?>