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
			echo '';
			while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
				
				?>
				<table class="table">
					  <thead>
					    <tr>
					      <th scope="col" style="width: 33%" >Curso</th>
					      <th scope="col" style="width: 33%">Dia da semana</th>
					      <th scope="col" style="width: 33%">Sala</th>					      
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row"><?php echo $result['curso']; ?></th>
					      <td><?php echo $result['dia']; ?></td>
					      <td><?php echo $result['sala']; ?></td>					      
					    </tr>
					  </tbody>
					</table>
				<?php

			}
		}
	}
	$turma = new ViewTurmas();
	$turma->TurmasView();
?>
