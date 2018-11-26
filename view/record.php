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
			    <h5 class="card-title">Registro de alunos</h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php 
						echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
						?></h6>
				<!--Inicio do corpo  -->
				<!--Formulario de cadastro -->
				<form action="../controller/cad_aluno.php" method="POST">
					<div class="row">
						<div class="col-md-4">

							<div class="form-group">
								<label for="exampleInputEmail1">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome">
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o nome completo.</small>
							</div>

						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputEmail1">Endereço</label>
								<input type="text" class="form-control" id="endereco" name="endereco" >
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o endereço.</small>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputEmail1">Bairro</label>
								<input type="text" class="form-control" id="bairro" name="bairro"  >
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o endereço.</small>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Cidade</label>
								<input type="text" class="form-control" id="cidade" name="cidade"  >
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o endereço.</small>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Curso</label>
								<input type="text" class="form-control" id="curso" name="curso"  >
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o endereço.</small>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Estado</label>
								<select class="form-control" id="estado" name="estado">
									<option value="GO">GO</option>
									<option value="DF">DF</option>
									<option value="SP">SP</option>
									<option value="MG">MG</option>
									<option value="TO">TO</option>
								</select>
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