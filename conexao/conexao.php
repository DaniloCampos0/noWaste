<?php
include ('config.php');

$conexao = mysqli_connect($host,$db_user,$db_password,$db_name);

if(!$conexao){
    die("Conexão com o banco de dados falhou! ". mysqli_connect_error());
}
?>