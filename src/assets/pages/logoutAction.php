<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">

    <title>Encerrar sessão</title>
</head>

<body>
    <?php 
        require_once('verificarAcesso.php'); 
    ?>

    <?php
        unset($_SESSION['logado']);
        header("location: ../../../index.php");
    ?>

</body>

</html>