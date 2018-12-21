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
	<div class="completo">
		<div class="container">		
		<!--Inicio do corpo  -->
		<div class="row" style="padding-top: 70px;" >
			<div class="col-md-12">
<!-- 				<div class="alert alert-primary" role="alert">
					<p>Registro de alunos</p>
					<?php 
					echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
					?>
				</div> -->
			</div>
		</div>
		
<!--Div that will hold the pie chart-->
    <div class="row">
    	<div class="col-md-12">
    		<div id="piechart" style="width: 100%; height: 100vh;">
    	</div>
    	</div>
    </div>
		</div>
	</div>

	<!-- /body -->

<?php 
include('footer.php');

 ?>



