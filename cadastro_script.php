<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
      <div class="container">
          <div class= "row">

            <?php
                include "connect.php";
                $morador_nome = $_POST['morador_nome'];
                $morador_cpf = $_POST['morador_cpf'];
                $morador_unidade = $_POST['morador_unidade'];
                $morador_contato = $_POST['morador_contato'];

                $sql = "INSERT INTO `morador`(`morador_nome`, `morador_cpf`, `morador_unidade`,`morador_contato`) VALUES ('$morador_nome','$morador_cpf','$morador_unidade','$morador_contato')";

                if(mysqli_query($conn, $sql)){
                    mensagem("$morador_nome cadastrado com sucesso!",'success');
                }
                else{
                    mensagem("$morador_nome não cadastrado!",'danger');
                }
            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>
          </div>
      </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>