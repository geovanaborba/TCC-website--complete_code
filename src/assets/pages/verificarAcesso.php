<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION))
        {
            session_start();
        }
        if((!isset ($_SESSION['logado']) == true))
        {
            header('location: ./acessoNegado.php'); 
            die();
        }
    ?>
</body>
</html>