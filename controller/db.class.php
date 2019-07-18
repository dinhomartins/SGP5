<?php
//Class of conection DB
class ConectionDb{
    public function ConectMysql(){
        try {
            $con = new PDO("mysql:host=localhost;dbname=sgp", "root", "");
        } catch (PDOException $error) {
            echo $error;
        }
        return $con;
    }
}

?>

