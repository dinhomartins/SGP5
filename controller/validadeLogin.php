<?php 
// Inicio sessão
    session_start(); 
    // verifica se esta logado
    if(isset($_SESSION['user'])){   
        
    }else{
        header('Location: index.php?erro=1');
    }
require_once('db.class.php');

class Acess{
    private $user;
    private $password;

    // Getters e Setters
    public function setUser($user){
        $this->user = $user;
    }
    public function setPass($password){
        $this->password = $password;
    }

    // Query validação de login
    public function validade(){
        $link = new ConectionDb();
        $con = $link->ConectMysql();
        $stmt = $con->prepare("SELECT * FROM usuarios WHERE user = :user AND pass = :pass");
        $stmt->bindParam(":user", $this->user);
        $stmt->bindParam(":pass", $this->password);
        $stmt->execute();

        // Verficação de dados existente no banco de dados
        if($stmt->rowCount() == 1){
            while ($results = $stmt->fetch(PDO::FETCH_ASSOC)){
                session_start();
                $_SESSION['id'] = $results['id'];
                $_SESSION['user'] = $results['user'];
                $_SESSION['pass'] = $results['pass'];
                header("Location: ../view/home.php");
                return $_SESSION['user'];
                }
        }else{
            echo 'Usuario invalido ';
        }
    }
}
  
$user = new Acess();
$user->setUser($_POST['user']);
$user->setPass($_POST['password']);
$user->validade();
?>