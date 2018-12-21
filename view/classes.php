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

		<form action="" method="POST" >
			<div class="row">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary" type="submit" id="cad_hour" name="cad_hour" >Cadastrar Horário</button>
					<button class="btn btn-primary" type="submit" id="view_class" name="view_class" >Vizualizar Horários</button>
				</div>
			</div>
			<!-- Filtro pesquisa por categoria -->
			

			<div class="row">
				<div class="col-md-12">
					<!-- Lista de horarios -->
					<?php 
						if(isset($_POST['cad_hour'])){
							require_once('classesHour.php');
						}
					?>
				</div>
			</div>

			
		</form>
		<div class="row">
			<div class="col-md-12">
				<!-- Cadastro de horarios -->
				<?php 
					if(isset($_POST['view_class'])){
						require_once('../controller/classesViewAll.php');
						
					}
					if(isset($_POST['btn_cad_hour'])){
						require_once('../controller/classesHour.php');
						
					}


				?>

			</div>
		</div>
	</div>
	<!-- /body -->

<?php 
include('footer.php');

 ?>



