<?php 
 // Inicio sessão
session_start(); 
// verifica se esta logado
if(!isset($_SESSION['user'])){   
    header('Location: ../index.php?erro=1');
}
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];

		$con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
		$stmt = $con->prepare("insert into cad_aluno (nome, endereco) values (:nome, :endereco) ");
		$stmt->bindParam(":nome", $nome);
		$stmt->bindParam(":endereco", $endereco);
		$stmt->execute();
		echo 'Cadastro com sucesso ';
		//print_r($stmt);

?>