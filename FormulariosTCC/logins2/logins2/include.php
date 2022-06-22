

<?php
include ('../../conexao/conexao.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['senha'];


$consulta = "INSERT INTO `loginss`(`nome`,`email`,`senha`) VALUES ('$name','$email','$password')";
header('Location: index.php');
echo($consulta);
$retorno = mysqli_query($mysqli, $consulta);

if($retorno){
    $copia_dados = "INSERT INTO login_est (nome_usuario, senha) SELECT nome_usuario, senha from estabelecimento";
}else{
    echo "Deu ruim";
}

?>