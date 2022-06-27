<?php
    require_once ('conexao.php');

    $ent_beneficiada = $_POST['ent_beneficiada'];
    $qtde_marmita = $_POST['qtde_marmita'];
    $validade = $_POST['validade'];
    $descricao = $_POST['descricao'];
    $id_ent_beneficiada = $_POST['id_igreja'];

    $query = "INSERT INTO no_waste.doacao(ent_beneficiada, qtde_marmita, validade, desc_conteudo, id_ent_doacao)
    VALUES
    ('$ent_beneficiada', '$qtde_marmita', '$validade', '$descricao', $id_ent_beneficiada);";

    if (!mysqli_query($conexao, $query)) {
        echo("Erro ao executar consulta: [$query]. Erro: " . mysqli_error($conexao));
    }

    header('location:../index.html');
?>