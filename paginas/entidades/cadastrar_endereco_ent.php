<body>
    <h1>Cadastro endereço</h1>
    <!-- Esquecemos completamente de criar um formulário pra adicionar o endereço, estou fazendo ele. Falta criar a tabela "tipo logradouro" no banco. Precisamos do endereço pra mostrar no card das igrejas. -->
  <form method="POST" action="adicionar_cadastro_ent.php">
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control" name="nomeEntidade" id="nomeEntidade" placeholder="Nome" required>
    </div>
    <div class="form-group">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade" minlength="3" pattern="[0-9]+$" required>
    </div>

    <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="input-text" name="cep" id="cep" pattern="[0-9]+$" required>
    </div>

    <div class="form-group">
      <label for="nomeUsuario">Logradouro</label>
      <input type="text" class="form-control" name="" id="" required>
    </div>
    
    
    Arquivo: <input type="file" name="imgv">

    <div class="form-group">
      <input type="submit" class="form-control" name="salvarEndereco" id="salvarEndereco">
    </div>
  </form>