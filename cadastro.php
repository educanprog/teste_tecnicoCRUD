<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <div class= "row">
              <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="morador_nome" class="form-label">Nome Completo:</label>
                        <input type="text" class="form-control" name="morador_nome" required>
                    </div>
                    <div class="form-group">
                        <label for="morador_cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" name="morador_cpf" maxlength="14" required placeholder = "XXX.XXX.XXX-XX" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}">
                    </div>
                    <div class="form-group">
                        <label for="morador_unidade" class="form-label">Unidade:</label>
                        <input type="number" class="form-control" name="morador_unidade" maxlength="4" required placeholder="XXXX" patter="[0-9]{4}">
                    </div>
                    <div class="form-group">
                        <label for="morador_contato" class="form-label">Contato (telefone):</label>
                        <input type="text" class="form-control" name="morador_contato" required placeholder="DDD XXXXX-XXXX" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" maxlength="16">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                <br>
                <a href="index.php" class="btn btn-primary">Voltar</a>
              </div>
          </div>
      </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>