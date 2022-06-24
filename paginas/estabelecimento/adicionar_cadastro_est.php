<?php
    require_once ('../../conexao/conexao.php');

    $nome_estabelecimento = $_POST['nomeEstabelecimento'];
    $nome_usuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];


    $query = "INSERT INTO estabelecimento(nome_est, nome_usuario, senha)
    VALUES
    ('$nome_estabelecimento', '$nome_usuario', '$senha')";

     if (!mysqli_query($conexao, $query)) {
        echo("Erro ao executar consulta: [$query]. Erro: " . mysqli_error($conexao));
    }

    $copia_dados = "INSERT INTO login_est SELECT (nome_usuario, senha) FROM entidades 
        VALUES
        ('$nome_usuario','$senha')"; 
    

    header('location:../index.html');
?>
