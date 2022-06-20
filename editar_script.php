<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <div class= "row">

            <?php
                include "connect.php";
                $id= $_POST['id'];
                $morador_nome = $_POST['morador_nome'];
                $morador_cpf = $_POST['morador_cpf'];
                $morador_unidade = $_POST['morador_unidade'];
                $morador_contato = $_POST['morador_contato'];

                $sql = "UPDATE `morador`SET morador_nome='$morador_nome',morador_cpf='$morador_cpf',
                morador_unidade='$morador_unidade',morador_contato='$morador_contato' WHERE cod_pessoa = $id";

                if(mysqli_query($conn, $sql)){
                    mensagem("Dados atualizados com sucesso!",'success');
                }
                else{
                    mensagem("Dados não atualizados!",'danger');
                }
            ?>
            <a href="visualizar.php" class="btn btn-primary">Voltar</a>
          </div>
      </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>