<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Monte sua doação</h1>


  <form method="POST" action="adicionar_doacao.php">

  <div class="form-group">
      <label for="qtde_marmita">Id entidade</label>
      <input type="number" class="form-control" name="id_ent" id="id_ent" required> 
    </div>

    <div class="form-group">
      <label for="qtde_marmita">Defina a quantidade de marmitas a serem doadas</label>
      <input type="number" class="form-control" name="qtde_marmita" id="qtde_marmita" required> 
    </div>
  
    <label for="validade">Validade</label>
    <select name= "validade" class="form-select">
        <option selected>selecione</option>
        <option>Menos de 24h</option>
        <option>Aproximadamente 24h</option>
        <option>Entre 24h e 48h</option>
    </select>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Insira uma descrição sobre a doação das marmitas aqui..." name="descricao" id="floatingTextarea2" style="height: 100px"></textarea>
      </div>
    </div>

    <div class="form-group">        
        <input type="submit" class="form-control" name="salvarDoacao" id="salvarDoacao">
    </div> 


</body>
</html>