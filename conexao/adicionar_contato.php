<?php
    require_once ('conexao.php');

    $nome = $_POST['u_nome'];
    $email = $_POST['u_email'];
    $telefone = $_POST['telefone'];
    $whatsapp = $_POST['whatsapp'];
    $rede_social = $_POST['redeSocial'];
    $tipo_telefone = $_POST['tipo_telefone'];

    $query = "INSERT INTO no_waste.contato(id_tipocontato, nome_contato, email, telefone, whatsapp, rede_social)
    VALUES
    ($tipo_telefone, '$nome', '$email', $telefone, $whatsapp, '$rede_social');";

    if (!mysqli_query($conexao, $query)) {
        echo("Erro ao executar consulta: [$query]. Erro: " . mysqli_error($conexao));
    }

    header('location:../index.html');
?>
