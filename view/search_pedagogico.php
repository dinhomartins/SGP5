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
		<div class="card" style="width:;">
			<div class="card-body">
			    <h5 class="card-title">Pesquisa</h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php 
						echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
						?></h6>
				<!--Inicio do corpo  -->
				<!--Formulario de cadastro -->
				<form  method="POST" action="" >
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Nome</label>
								<input type="text" class="form-control" id="nome" name="nome">
								<small id="emailHelp" class="form-text text-muted">Preencha este campo com o nome que deseja pesquisar.</small>
							</div>
							<div class="form-group">	
								<input type="hidden" class="form-control" id="id" name="id">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<button class="btn btn-primary" id="btn-submit" name="btn-submit"  type="submit">Pesquisar</button>
						</div>
					</div>
					<div class="row" style="margin-top: 20px">
						<div class="container">
							<?php
							// se o botão for submit carregue a página aqui
							if(isset($_POST['btn-submit'])){
								require_once('../controller/search_pedagogico.php');
							}
						?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php 
include('footer.php');
 ?>