<?php
// verifica se a super global server é do tipo POST

define('FILENAME', 'filename.txt');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    // verifica se o arquivo existe
    if(!file_exists(FILENAME))
        $handle = fopen(FILENAME, "w");
    // senão cria um novo    
    else 
        $handle = fopen(FILENAME, "a");

    fwrite($handle, "\n"."Nome:".$_POST['username']."CPF: ".$_POST['cpf']);
    fflush($handle);
    fclose($handle);

    header("location: welcome.php");

}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastrar mascarados</h2>
        <p>Favor inserir seu nome e CPF.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="number" name="cpf" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>
