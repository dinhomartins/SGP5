<?php 
// inicia sestao
session_start();
// instacia do banco de dados
require_once('controller/db.class.php');
$link = new ConectionDb();
$con = $link->ConectMysql();

 ?>
<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

           <!-- Our Custom CSS -->
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="view/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="js/jquery.js"></script>
        <script src="js/Chart.bundle.js"></script>
        
    <title>Bem vindo ao SGP</title>
  </head>
<body>
 
    <div class="welcome">
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="txt-h2">S G P</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-group" method="post" action="controller/validadeLogin.php">
                            <input class="form-control input" type="text" id="user" name="user" >
                            <input class="form-control input"  type="password" id="password" name="password" >
                            <button type="submit" class="btn btn-danger btn-login" id="btn_login">Logar</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('#btn_login').click(function(){
                        //alert('clicou');
                       var campo_vazio = false;
                    //     nome do campo
                    if($('#user').val() == ''){
                        // se o campo nome estiver vazio mude a cor para
                        // muda a bordar do campo para vermelhor caso estaja vezio
                        $('#user').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    } else {
                        $('#user').css({'border-color':'##CCC'});
                    }
                    if($('#user').val() == ''){
                        alert("Por favor preencha o campo usuário.");
                        campo_vazio = true;
                    }


                    if($('#password').val() == ''){
                        alert("Por favor preencha o campo senha.");
                        campo_vazio = true;
                    }
                    if($('#password').val() == ''){
                        $('#password').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    } else {
                        $('#password').css({'border-color':'##CCC'});
                    }
                    if(campo_vazio) return false;
                });
            })
        </script>
  </body>