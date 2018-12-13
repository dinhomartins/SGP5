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
		<div class="row">
			<div class="col-md-3">
				<div class="box-total1">
					<p>132</p>
					<p>Total de alunos</p>	
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total2">
					<p>132</p>
					<p>Total de alunos Ativos</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total3">
					<p>132</p>
					<p>Total de alunos trancados</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total4">
					<p>132</p>
					<p>Total de alunos Concluido</p>
				</div>
			</div>
		</div>

		<div class="row" style="padding-top: 30px;">
			<div class="col-md-3">
				<div class="box-total5">
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total5">
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total5">
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-total5">
					
				</div>
			</div>
		</div>

		<div class="row" style="padding-top: 30px;">
			<div class="col-md-6">
				<div class="box-grande">
					
				</div>
			</div>

			<div class="col-md-6">
				<div class="box-grande">
					
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- /body -->

<?php 
include('footer.php');

 ?>



