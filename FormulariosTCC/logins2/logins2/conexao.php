<?php
    $host= "localhost";
    $database= "logins";
    $senha= "";
    $user= "root";

    $mysqli = new mysqli($host,$user,$senha, $database);

    if($mysqli -> error){
        die('Falha ao conectar banco de dados: ' . $mysqli -> error);
    }
?>