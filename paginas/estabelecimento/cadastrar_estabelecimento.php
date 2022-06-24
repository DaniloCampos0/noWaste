

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro Restaurante</h1>
  <form method="POST" action="adicionar_cadastro_est.php">
    <div class="form-group">
      <label for="nomeRestaurante">Nome Restaurante</label>
      <input type="text" class="form-control" name="nomeEstabelecimento" id="nomeEstabelecimento" placeholder="Nome" required>
    </div>

    <div class="form-group">
      <label for="nomeUsuario">Nome de usuário</label>
      <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" minlenght="8" required>
    </div>
   
    <div class="form-group">
      <input type="submit" class="form-control" name="salvarUsuario" id="salvarUsuario">
    </div>
  </form>
</body>
</html>