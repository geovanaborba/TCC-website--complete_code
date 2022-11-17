<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>ProgQuiz - Login</title>
</head>

<body>
    <div class="container">

        <?php
        $nome = $_POST['txtNome'];
        $senha = $_POST['txtSenha'];
        require_once './conexao.php';

        $sql = "SELECT * FROM `login` WHERE username = '" . $nome . "';";
        $resultado = $conexao->query($sql);
        //echo $sql;
        $linha = mysqli_fetch_array($resultado);
        if ($linha != null) {
            if ($linha['senha'] == $senha) {
                header('location: ./home.php'); 
                            $_SESSION['logado'] = $nome;
            } else {
                echo '
                                <a href="./login.php">
                                    <h1>Login Inválido! 
                                    <br>
                                    Clique aqui e tente novamente. </h1>
                                    </a> ';
            }
        } else {
            echo '
                            <a href="./login.php">
                                <h1>Login Inválido! 
                                <br>
                                Clique aqui e tente novamente.</h1>
                                </a> ';
        }

        $conexao->close();
        ?>

    </div>
</body>

</html>