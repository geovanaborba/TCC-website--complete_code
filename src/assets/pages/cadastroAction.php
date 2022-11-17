<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/cadastroAction.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">
    <title>Cadastro - mySQLi</title>
</head>

<body>

    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        
        require_once './conexao.php';

        $sql = "INSERT INTO cadastro (nome, username, email,senha)
                VALUES ('".$_POST['txtNome']."', '".$_POST['txtUsername']."','".$_POST['txtEmail']."', '".$_POST['txtSenha']."')";

        if($conexao->query($sql) === TRUE) {
            echo '
                <a href="./home.php">
                <h1 class="w3-button w3-green">Sucesso! <br> Clique aqui para continuar.</h1>
                </a>
                ';
        } else {
            echo '
                <a href="./cadastro.php">
                <h1 class="w3-button w3-red">ERRO! <br>Tente novamente. </h1>
                </a>
                ';
        }

        $conexao->close();
        ?>
    </div>
</body>

</html>