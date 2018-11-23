<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style_home.css">
	<script src="../js/validade_Fields.js"></script>
	<title>SGP</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">SGP</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="record.php">Cadastro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="search.php">Pequisar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Turmas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Quadro de Horário</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logOut.php">Sair</a>
				</li>
			</ul>
		</div>
	</nav>

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




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$('.datepicker').datepicker({
		    format: 'dd/mm/yyyy',
		    startDate: '-3d'
		});
	</script>
	

</body>
</html>