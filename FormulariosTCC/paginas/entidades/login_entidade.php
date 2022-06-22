<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Entidade</title>
</head>
<body>
    <h1>Login Entidade</h1>
  <form method="POST" action="adicionar_estabelecimento.php">
 
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