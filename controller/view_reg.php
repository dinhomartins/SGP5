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
			echo '<form>';
			
				echo	'<div class="row">'; // inicio da linha
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1" >Nome</label>';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['nome'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col
		//---------------------------------------------------------------------------------------------
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1">Endereço</label>';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['endereco'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col
		//---------------------------------------------------------------------------------------------
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1">Bairro</label>';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['bairro'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col
		//---------------------------------------------------------------------------------------------
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1">Cidade</label>';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['cidade'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col
		//---------------------------------------------------------------------------------------------
				echo		'<div class="col-md-4">'; // inicio da col
				echo			'<div class="form-group">';
				echo				'<label for="exampleInputEmail1">Estado</label>';
				echo				'<input type="text" readonly  class="form-control" id="nome" name="nome" value=" '.$results['estado'].' ">';
				echo			'</div>';
				echo		'</div>'; // fim da col
		//---------------------------------------------------------------------------------------------

				echo '</div>'; // fim da linha

				echo '<div class="row">';

				echo '<div class="col-md-4">';
				echo '<a  href="edit_reg.php?id='.$results['id']. '" class="btn btn-primary btn-block">Editar    </a>';
				
				echo '</div>';
				echo '</div>'; // fim da col

				echo '<div class="row">';
				
				echo '<div class="col-md-4">';
				
				echo '<a  href="add_curse.php?id='.$results['id'].'" class="btn btn-primary btn-block" style=margin-top:20px;>Adicionar Curso</a>';
				echo '</div>';
				echo '</div>'; // fim da col

				echo '</div>'; // fim da linha

			echo '</form>';
				}
			}
		}

$aluno = new View();
$aluno->setId($_GET['id']);
$aluno->View_reg();

?>