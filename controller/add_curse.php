<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}
class View{

	private $id;

	public function setId($id){
		$this->id = $id;
	}
	public function View_reg(){
		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("SELECT * FROM cadastro WHERE id = :ID");
		$curse = $con->prepare("SELECT * FROM turmas");
		$stmt->bindParam(":ID", $this->id);
		//$stmt->bindParam(":ID", $id);
		//$id = $_GET['id'];
		$stmt->execute();
		$curse->execute();
		
		while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
			//echo $results['nome'];
			//echo '<form>';
				echo	'<div class="row">'; // inicio da linha

				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1"  >Nome</label>';
				echo				'<input type="hidden" readonly  class="form-control" id="id" name="id" value=" '.$results['id'].' ">';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['nome'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col



				//-------------------------------------------------------------------------------------------
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1" >Curso</label>';
				echo				'<select class="form-control"  id="curse" name="curse">';
				echo				'<option value=""></option>';
				echo				'<option value="Informix">Informix</option>';
				echo				'<option value="Secretariado Executivo">Secretariado Executivo</option>';
				echo				'<option value="Web Designer">Web Designer</option>';
				echo				'<option value="Designer Gráfico">Designer Gráfico</option>';
				echo				'<option value="Eletricista">Eletricista</option>';
				echo				'</select>';	
				echo			'</div>';
				echo		'</div>'; // fim da col


				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1" >Dia da Semana</label>';
				echo				'<select class="form-control"  id="dia" name="dia">';
				echo				'<option value="Segunda">Segunda</option>';
				echo				'<option value="Terça">Terça</option>';
				echo				'<option value="Quarta">Quarta</option>';
				echo				'<option value="Quinta">Quinta</option>';
				echo				'<option value="Sexta">Sexta</option>';
				echo				'</select>';	
				echo			'</div>';
				echo		'</div>'; // fim da col

				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo 				'<select class="form-control" id="horario" name="horario">';
				echo					'<option value="08:00 - 09:00">08:00 - 09:00</option>';
				echo					'<option value="08:00 - 10:00">08:00 - 10:00</option>';
				echo					'<option value="08:00 - 11:00">08:00 - 11:00</option>';
				echo					'<option value="09:00 - 10:00">09:00 - 10:00</option>';
				echo					'<option value="10:00 - 11:00">10:00 - 11:00</option>';
				echo					'<option value="10:00 - 12:00">10:00 - 12:00</option>';
				echo					'<option value="13:00 - 15:00">13:00 - 15:00</option>';
				echo					'<option value="11:00 - 14:00">11:00 - 14:00</option>';
				echo					'<option value="14:00 - 15:00">14:00 - 15:00</option>';
				echo					'<option value="14:00 - 17:00">14:00 - 17:00</option>';
				echo					'<option value="14:00 - 18:00">14:00 - 18:00</option>';
				echo					'<option value="18:00 - 20:00">18:00 - 20:00</option>';
				echo				'</select>';	
				echo			'</div>';
				echo		'</div>'; // fim da col

				echo	'</div>'; // fim da linha
				//echo '<button type="submit" class="btn btn-primary" >Salvar</button>';
				
			//echo '</form>';
				}
			}
		}

$aluno = new View();
$aluno->setId($_GET['id']);
$aluno->View_reg();

?>