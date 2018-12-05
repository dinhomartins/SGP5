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
		$stmt->bindParam(":ID", $this->id);
		//$stmt->bindParam(":ID", $id);
		//$id = $_GET['id'];
		$stmt->execute();
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