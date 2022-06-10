<?php
require_once 'conexao.php';

$nome_entidade = $_GET['nomeEntidade'];
$cnpj = $_GET['CNPJ'];
$email = $_GET['email'];
$nome_usuario = $_GET['nomeUsuario'];
$senha = $_GET['senha'];
// $confirmacaoSenha = $_GET['confirmacaoSenha'];
// $imagemPerfil = $_GET['imagemPerfil'];

$consulta = "INSERT INTO `entidade`(`nome_ent`,`CNPJ`,`email`,`nome_usuario`, `senha`) VALUES ('$nome_entidade','$cnpj','$email','$nome_usuario', '$senha')";
echo($consulta);
$retorno = mysqli_query($conexao, $consulta);

if($retorno){
    echo(" Registro inserido ");
    header('Location: ../index.html');
}

//echo($select);

?>