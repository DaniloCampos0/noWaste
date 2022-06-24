<?php
    include("../../conexao/conexao.php");
$usuario    =   $_POST['nomeUsuario'];
    $senha        =   $_POST['senha'];

    //agora que pegamos usuario e senha vamos consultar no banco de dados
    $query = "Select nome_usuario, senha from entidade where nome_usuario = '$usuario' and senha = '$senha';";
    $retorno=mysqli_query($conexao,$query);
    $linhas_retorno = mysqli_num_rows($retorno);
    if ($linhas_retorno<1){
        //escreve que não deu certo e redireciona a página
        echo ("Login incorreto");
        header('location:login_estabelecimento.php');
    } else{
        //manda para a página que vc quer redirecionar
        header('location:quemsomos.html');
    }

?>