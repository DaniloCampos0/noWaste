<?php
    require_once ('../../conexao/conexao.php');

    $idEnt = $_POST['id_ent'];
    $qtde_marmita = $_POST['qtde_marmita'];
    $validade = $_POST['validade'];
    $descricao = $_POST['descricao'];


    $consulta = "INSERT INTO doacao(id_ent_doacao, qtde_marmita, validade, desc_conteudo)
    VALUES
    ('$idEnt', '$qtde_marmita', '$validade', '$descricao');";

    if (!mysqli_query($conexao, $consulta)) {
        echo("Erro ao executar consulta: [$consulta]. Erro: " . mysqli_error($conexao));
    }

    header('location:../doacao.php');
?>