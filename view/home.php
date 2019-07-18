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
		<div class="row" style="padding-top: 20px;" >
			<div class="col-md-12">
				<?php 
				echo 'Seja bem vindo: ' . '<b>' .($_SESSION['user']).' </b> ';
				?>
			</div>
		</div>
	</div>
		
<!--Div that will hold the pie chart-->
    <div class="row">
    	<div class="container">
    		<div class="col-md-12" style="margin-top: 100px; text-align: center;">
    			<button class="btn btn-outline-primary" style="width: 20%; height: 150px;" type="submit">Ultimos registros</button>
    			<button class="btn btn-outline-secondary" style="width: 20%; height: 150px;" type="submit">Turmas finalizando</button>
    			<button class="btn btn-outline-success" style="width: 20%; height: 150px;" type="submit">Button</button>
    			<button class="btn btn-outline-danger" style="width: 20%; height: 150px;" type="submit">Cancelamentos agendados</button>
    		</div>
    	</div>
    </div>
	</div>
	

	<!-- /body -->

<?php 
include('footer.php');

 ?>



