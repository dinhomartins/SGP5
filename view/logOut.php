<?php 
session_start();
session_unset();
echo 'Deslogado com sucesso ';
header("Refresh: 2; url = ../index.php");

?>