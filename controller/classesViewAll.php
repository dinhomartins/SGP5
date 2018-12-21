
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
			?>
			
				<table class="table">
					  <thead>
					    <tr>
					      <th scope="col" style="width: 25%" >Curso</th>
					      <th scope="col" style="width: 25%">Dia da semana</th>
					      <th scope="col" style="width: 25%">Horário</th>
					      <th scope="col" style="width: 25%">Ação</th>				      
					    </tr>
					  </thead>
					  <?php while($result = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
					  <tbody>
					    <tr>
					      <th scope="row"><?php echo $result['curso']; ?></th>
					      <td><?php echo $result['dia']; ?></td>
					      <td><?php echo $result['semana']; ?></td>	
					      <td><a href="../view/classesCount.php" class="btn btn-primary">Visualizar</a></td>					      
					    </tr>
					    <?php endWhile ?>
					  </tbody>
					</table>
				<?php

			
		}
	}
	$turma = new ViewTurmas();
	$turma->TurmasView();
?>
