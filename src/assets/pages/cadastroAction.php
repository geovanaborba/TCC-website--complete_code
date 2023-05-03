<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/action.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Cadastro - mySQLi</title>
</head>

<body>

    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php

        require_once('./conexao.php');

        // verifica se o usuário já existe
        $sql = "SELECT * FROM cadastro WHERE email = '" . $_POST['txtEmail'] . "' OR username = '" . $_POST['txtUsername'] . "'";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // usuário já cadastrado, exibe mensagem de erro
            echo '
                <h1 class="titulo-erro">ERRO! <br>Usuário já cadastrado.</h1>
                <a href="./cadastro.php">
                    <button class="btn-erro"> OK </button>
                </a>
            ';
        } else {
            // insere os dados na tabela
            $sql = "INSERT INTO cadastro (nome, username, email, senha)
                    VALUES ('" . $_POST['txtNome'] . "', '" . $_POST['txtUsername'] . "','" . $_POST['txtEmail'] . "', '" . $_POST['txtSenha'] . "')";
            // mensagem de sucesso
            echo '
                <h1 class="titulo-ok">Cadastro Realizado! <br> Por favor, efetue o login para validar seus dados.</h1>
                <a href="./login.php">
                    <button class="btn-ok"> OK </button>
                </a>
            ';  
        }

        if ($conexao->query($sql) === FALSE) {
            echo '
                <h1 class="titulo-erro">ERRO! <br>Tente novamente. </h1>
                <a href="./cadastro.php">
                    <button class="btn-erro"> OK </button>
                </a>
            ';
        }

        $conexao->close();
        ?>
    </div>
</body>

</html>