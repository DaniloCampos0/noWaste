<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>


</head>

<body>
    <form action="adicionar_contato.php" method="post">
        <div class="form-group">
            <label for="userEmail">Nome</label>
            <input type="text" name="u_nome" id="userNome" placeholder="Nome" required><br><br>
        </div>
        <div class="form-group">
            <label for="userEmail">E-mail</label>
            <input type="email" name="u_email" id="userEmail" placeholder="example@email.com.br" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br><br>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="telefone" id="telefone"  placeholder="(00)0000-0000" pattern="[0-9]+$" maxlength="15" autocomplete="off" id= "3" required>            
            <label for="telefone">Telefone</label>
        </div>

        <!-- <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="(00)00000-0000" minlenght="10" maxlength="15" required><br><br>
        </div> -->

        <select name="tipo_telefone" id="tipo_telefone">
            <option value="1">Celular</option>
            <option value="2">Comercial</option>
            <option value="3">Residencial</option>
        </select>
        <br><br>

        <!-- <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" name="whatsapp" id="whatsapp" placeholder="(00)00000-0000" minlenght="10" required><br><br>
        </div> -->

        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="ZapZap">
            <label for="whatsapp">WhatsApp</label>
        </div>

        <div class="form-group">
            <label for="redeSocial">Rede Social</label>
            <input type="text" name="redeSocial" id="redeSocial" placeholder="Informe sua rede social para contato" required><br><br>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" name="salvarUsuario" id="salvarUsuario">
        </div>
    </form>



</body>

</html>