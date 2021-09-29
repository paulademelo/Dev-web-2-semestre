<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

require_once('./dados_banco.php');

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){

    try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $firstname = $_POST['firstName'];
         $lastname = $_POST['lastName'];
         $sql = "INSERT INTO users(FIRSTNAME, LASTNAME)
          VALUES ('$firstname', '$lastname')";
          echo $sql;
        //   die();

          // use exec() because no results are returned
          $conn->exec($sql);
          echo "New record created successfully";
        }
     catch(PDOException $e)
        {
           echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;
}

?>
</body>
</html>