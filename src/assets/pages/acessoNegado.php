<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/estilos-acesso-login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Acesso Negado</title>
</head>

<body>

    <div>

        <?php
        echo '
                    <h1>Acesso NEGADO!</h1>
                <h2>
                    É necessário a realização do 
                    <a href="../../../src/assets/pages/login.php">Login</a> ou 
                    <a href="../../../src/assets/pages/cadastro.php">Cadastro</a>!
                </h2>
            ';
        ?>
    </div>

</body>
</html>