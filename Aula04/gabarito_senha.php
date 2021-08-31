<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php

    // Inicia a sessão
    session_start();
    define('PASSWORD', "opa");
    define("FILENAME", "registrar_tentativas.txt");

    // Verifica se existe um POST   
    if(isset($_POST['senha']))
    {

      // Pegando número digitado
      $numero  = $_POST['senha'];

      // Fazendo as verificações
      if(PASSWORD == $numero) {
        echo "Parabéns, realmente a senha é: ".$_POST['senha'];
        
      } else {

        echo "Senha incorreta! Tente novamente";

        if(!file_exists(FILENAME))
            $handle = fopen(FILENAME, "w");
        else 
            $handle = fopen(FILENAME, "a");

        fwrite($handle, "\n".$_POST['senha']);
        fflush($handle);
        fclose($handle);
        
      }

    }
?>
</body>
</html>