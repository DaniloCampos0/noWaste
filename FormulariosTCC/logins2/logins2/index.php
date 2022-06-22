<?php
include('../../conexao/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email'])== 0){
        echo 'preencha seu email';
    }else if(strlen($_POST['senha'])== 0){
        echo 'preencha sua senha';
    } else{
        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        $sql_code= "SELECT * FROM loginss WHERE email = '$email' AND senha = '$senha'";
        $sql_query= $mysqli-> query($sql_code) or die("Falha na execucao da brincadeira: " . $mysqli->error);

        $quant = $sql_query->num_rows;

        if($quant == 1){
            $user = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];

            header("Location: painel.php");

        }else{
            echo 'Falha ao logar na brincadeira';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar na conta</title>
</head>
<body>
    <center>
   <form action="" method="POST">
       <p>
           <label>Email</label>
           <input type="text" name="email" id="">
       </p>
       <p>
           <label>Senha</label>
           <input type="password" name="senha" id="">
       </p>
       <p>
           <button type="submit">Entrar</button>
       </p>
   </form>
</center>
</body>
</html>