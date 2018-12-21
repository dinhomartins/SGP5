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

	public function searchId(){
		$objDb = new Conect();
		$con = $objDb->MysqlCon();
		$stmt = $con->prepare("SELECT * FROM cadastro where nome LIKE :nome ");
		$stmt->bindParam(":nome", $this->nome);
		$stmt->execute();
?>
	<!-- Tabela com resultado da busca -->
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="width:5%" scope="col">id</th>
				<th style="width:30%" scope="col">Nome</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<?php while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tbody>
				<tr>
					<th scope="row"><?php echo $dados['id'] ?></th>
					<td><?php echo $dados['nome'] ?></td>
					<td><a href="../view/view_reg.php?id=<?php echo $dados['id']?>" class="btn btn-primary">Visualizar</button> </td>				
					</tr>
					<?php endWhile ?>
				</tbody>
			</table> 
<?php
	}
}

$aluno = new Search();
$aluno->setNome($_POST['nome']);
$aluno->searchId();
?>