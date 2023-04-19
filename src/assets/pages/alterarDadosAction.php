<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../css/action.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Atualização - MYSQLI</title>
</head>

<body>


    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

        <?php
        require_once './conexao.php';
        require_once './verificarAcesso.php';

        $sql = "UPDATE cadastro SET nome = '" . $_POST['txtNome'] . "', email='" . $_POST['txtEmail'] . "' WHERE usuario_id =" . $_SESSION['id'] . ";";


        if ($conexao->query($sql) === TRUE) {
            echo '
                <h1 class="titulo-ok">Dados atualizados com sucesso! <br> Faça login novamente para validar sua alteração. </h1>
                <a href="./logoutAction.php">
                    <button> Ok </button>
                </a> 
            ';
        } else {
            echo '
                <h1 class="titulo-erro">ERRO! Tente novamente.</h1>
                <a href="./alterarDados.php">
                    <button> Ok </button>
                </a> 
            ';
        }
        $conexao->close();
        ?>
    </div>

</body>
</html>