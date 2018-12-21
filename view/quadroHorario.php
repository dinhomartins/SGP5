<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}
include('header.php');
include('../controller/quadroHorario.php');
?>
<div class="bg">
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="box">
				<h3><?php echo $interativo ?></h3>
				<p><?php echo $dia ?></p>
				<p>Alunos: 20</p>
				<?php 
					$aluno = new QuadroHorario();
					$aluno->QuadroHorarioVer();
				 ?>
			</div>
			<div class="footer_box">

			</div>
		</div>
		<div class="col-md-3">
			<div class="box1">
				<h3>Turma</h3>
				<p>Alunos: 20</p>
				<?php 
					$aluno = new QuadroHorario();
					$aluno->QdhBeleza();
				 ?>
			</div>
			<div class="footer_box">
				<i class="fas fa-arrow-right"></i>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box2">
				<h3>Turma</h3>
				<p>Alunos: 20</p>
				<?php 
					$aluno = new QuadroHorario();
					$aluno->QdhBeleza();
				 ?>
			</div>
			<div class="footer_box">

			</div>
		</div>
		<div class="col-md-3">
			<div class="box3">
				<h3>Turma</h3>
				<p>Alunos: 20</p>
				<?php 
					$aluno = new QuadroHorario();
					$aluno->QdhBeleza();
				 ?>
			</div>
			<div class="footer_box">

			</div>
		</div>
	</div>
	<!-- Fim da linha quadro de horario -->


	<!-- nova linha  -->
	<div class="row" style="padding-top: 40vh;">
		<div class="col-md-3">
			<div class="box-media">
				<div class="header-box">
					
				</div>
				<div id="piechart" style="width: 100%;">
			</div>
		</div>
	</div>

</div>
</div>
<div class="bg2">

</div>
<?php 
include('footer.php');
?>