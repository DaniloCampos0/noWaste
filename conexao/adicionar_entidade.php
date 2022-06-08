<?php
require_once 'conexao.php';

$nome_entidade = $_POST['nomeEntidade'];
$cnpj = $_POST['CNPJ'];
$email = $_POST['email'];
$nome_usuario = $_POST['nomeUsuario'];
$senha = $_POST['senha'];
// $confirmacaoSenha = $_GET['confirmacaoSenha'];
// $imagemPerfil = $_GET['imagemPerfil'];

$consulta = "INSERT INTO `entidade`(`nome_ent`,`CNPJ`,`email`,`nome_usuario`, `senha`) VALUES ('$nome_entidade','$cnpj','$email','$nome_usuario', '$senha')";
echo($consulta);
$retorno = mysqli_query($conexao, $consulta);


if($retorno){
    echo(" Registro inserido ");
    header('Location: index.php');
}

//echo($select);

?>