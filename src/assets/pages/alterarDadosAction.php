<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atualização - MYSQLI</title>
</head>

<body>


    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

        <?php
        require_once './conexao.php';
        require_once './verificarAcesso.php';

        $sql = "UPDATE cadastro SET nome = '" . $_POST['txtNome'] . "', username = '" . $_POST['txtUsername'] . "',
        email='" . $_POST['txtEmail'] . "' WHERE usuario_id =" . 1 . ";";


        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="./alterarDados.php">
                <h1 class="w3-button w3-teal">Cadastro atualizado com sucesso! </h1>
            </a> 
            ';
            $id = mysqli_insert_id($conexao);
        } else {
            echo '
            <a href="./alterarDados.php">
                <h1 class="w3-button w3-teal">ERRO! Tente novamente.</h1>
            </a> 
            ';
        }
        $conexao->close();
        ?>
    </div>

</body>
</html>