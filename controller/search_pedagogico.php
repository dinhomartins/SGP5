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
	// Função Busca no banco de dados
	public function searchAluno(){
		$objDb = new Conect();
		$con = $objDb->MysqlCon();
		
		$stmt = $con->prepare("SELECT * FROM aluno_curs where NAME LIKE :nome ");
		$stmt->bindParam(":nome", $this->nome);
		$stmt->execute();
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Curso cadastrado</th>
				</tr>
			</thead>
			<?php while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)): ?> 
				<tbody>
					<tr>
						<td style="width:50%" ><?php echo $dados['NAME'] ?></td>
						<td><?php echo $dados['CURSE'] ?></td>	
					</tr>
					<?php endWhile ?>
				</tbody>
			</table>
			<?php 			
	}
}

$aluno = new Search();
$aluno->setNome($_POST['nome']);
$aluno->searchAluno();
?>