<?php 
// Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
	header('Location: ../index.php?erro=1');
}
include('header.php');



require_once('../controller/classesCount.php');




 
include('footer.php');

 ?>