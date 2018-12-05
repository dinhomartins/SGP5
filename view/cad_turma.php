<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}

include('header.php');
?>

	<div class="container">
		<div class="card" style="width:">
			<div class="card-body">
			    <h5 class="card-title">Registro de Turmas</h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php 
						echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
						?></h6>
				<!--Inicio do corpo  -->
				<!--Formulario de cadastro -->
				<form action="../controller/cad_turma.php" method="POST">
					<div class="row">
						<div class="col-md-4">

							<div class="form-group">
								<label for="exampleInputEmail1">Horário</label>
								<input type="text" class="form-control" id="nome" name="nome">
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o nome completo.</small>
							</div>

						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Sala</label>
								<select class="form-control" id="estado" name="estado">
									<option value="LAB I">LAB I</option>
									<option value="LAB II">LAB II</option>
									<option value="BELEZA">BELEZA </option>
									<option value="MULTIDISCIPLINAR I">MULTIDISCIPLINAR I</option>
									<option value="MULTIDISCIPLINAR II">MULTIDISCIPLINAR II</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Horário</label>
								<input type="text" class="form-control" id="nome" name="nome">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Data Inicio do curso</label>
								<input type="date" name="data_nasc" id="data_nasc" min="2018-01-01"
								max="2040-12-31" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<button class="btn btn-primary"data-toggle="modal" id="btn-submit" name="btn-submit" data-target="#modal-mensagem" type="submit">Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
<?php 
include('footer.php');
?>