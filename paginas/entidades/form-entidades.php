<?php
require_once ('conexao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro entidades</h1>
  <form method="$_GET" action="include.php">
    <div class="form-group">
      <label for="nomeEntidade">Nome entidade</label>
      <input type="text" class="form-control" name="nomeEntidade" id="nomeEntidade" placeholder="Nome" required>
    </div>
    <div class="form-group">
      <label for="CNPJ">CNPJ</label>
      <input type="text" class="form-control" name="CNPJ" id="CNPJ" placeholder="00.000.000/0000-00" minlength="14" maxlenght="14" pattern="[0-9]+$" required>
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" required="required" class="input-text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
    </div>

    <div class="form-group">
      <label for="nomeUsuario">Nome de usuário</label>
      <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" minlenght="8" required>
    </div>
    <!-- <div class="form-group">
      <label for="">Confirme sua senha</label>
      <input type="password " class="form-control"names="confirmacaoSenha" id="confirmacaoSenha" minlenght="8" required>
    </div>-->
    
    <div class="form-group">
    <p>Insira uma foto de perfil</p>
    <input type="file" name="imagemPerfil" id="imagemPerfil">
    </div> 

    <div class="form-group">
      <input type="submit" class="form-control" name="salvarUsuario" id="salvarUsuario">
    </div>
  </form>
</body>
</html>