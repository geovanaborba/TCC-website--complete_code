<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/action.css">

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
                $_SESSION['senha'] = $senha;

                $_SESSION['id'] = $linha['usuario_id'];
                $_SESSION['email'] = $linha['email'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['senha'] = $linha['senha'];
                $_SESSION['pontuacao'] = $linha['pontuacao'];
            } else {
                echo '
                <h1 class="titulo-erro">Login Inválido!</h1> 
                <a href="./login.php"> 
                    <button> Tentar novamente </button>
                </a>
                <a href="./cadastro.php">
                    <button> Fazer cadastro </button>
                </a>
                ';
            }
        } else {
            echo '
            <h1 class="titulo-erro">Login Inválido!</h1> 
            <a href="./login.php"> 
                <button class="btn-erro"> Tentar novamente </button>
            </a>
            <a href="./cadastro.php">
                <button class="btn-erro"> Fazer cadastro </button>
            </a>
            ';
        }
        $conexao->close();
        ?>

    </div>
</body>

</html>