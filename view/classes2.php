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
			<form action="" method="POST">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Sala</label>
					<select class="form-control" id="escolha" name="escolha">
						<option value="informix">informix</option>
						<option value="Cabelereiro">Cabelereiro</option>
						<option value="Interativo">Interativo</option>
					</select>
				</div>
				<button class="btn btn-primary btn-search" id="btn-search" name="btn-search" type="submit">Pesquisar</button>
			</form>
			<?php 
				if(isset($_POST['btn-search'])){
				require_once('../controller/classesView.php');
			}
			 ?>
	</div>
	<!-- /body -->

<?php 

include('footer.php');



 ?>



