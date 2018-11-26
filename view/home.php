<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}
include('header.php');

?>
	<!-- body -->
	<div class="container">
		<!--Inicio do corpo  -->
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-primary" role="alert">
					<p>Registro de alunos</p>
					<?php 
					echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
					?>
				</div>

			</div>
		</div>
	</div>
	<!-- /body -->

<?php 
include('footer.php');

 ?>



