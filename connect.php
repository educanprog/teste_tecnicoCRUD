<?php
    $server = "localhost";
    $usuario="root";
    $senha = "";
    $bd = "controle";
    $conn= mysqli_connect($server, $usuario, $senha,$bd);
    //Checar conexão
    if($conn== TRUE) {
        echo "Conectado com sucesso.";
    }else{
        echo "Erro.";
    }

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
              </div>";
    }


?>