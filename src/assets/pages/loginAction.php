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
    <link rel="stylesheet" href="../../css/scroll.css">
    <link rel="stylesheet" href="../../css/estilos-acesso-login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>ProgQuiz - Login</title>
</head>

<body>
    <div class="container">

        <?php
        session_start();
        
        $nomeusuario = $_POST['txtUsername'];
        $senha = $_POST['txtSenha'];
        require_once './conexao.php';

        $sql = "SELECT * FROM `cadastro` WHERE username = '" . $nomeusuario . "';";
        $resultado = $conexao->query($sql);
        //echo $sql;
        $linha = mysqli_fetch_array($resultado);
        if ($linha != null) {
            if ($linha['senha'] == $senha) {
                header('location: ./home.php'); 
                            $_SESSION['logado'] = $nomeusuario;
            } else {
                echo '
                    <a href="../../../index.php">
                        <h1>Login Inválido!</h1>
                    </a>
                    <br>
                    <h2>
                        Clique 
                        <a href="./login.php">aqui</a>
                         e tente novamente ou faça 
                        <a href="../../../src/assets/pages/cadastro.php">cadastro.</a>
                    </h2>
                ';
            }
        } else {
            echo '
                <a href="../../../index.php">
                    <h1>Login Inválido!</h1>
                </a>
                <br>
                <h2>
                    Clique 
                    <a href="./login.php">aqui</a>
                     e tente novamente ou faça 
                    <a href="../../../src/assets/pages/cadastro.php">cadastro.</a>
                </h2>
            ';
        }
        $conexao->close();
        ?>

    </div>
</body>

</html>