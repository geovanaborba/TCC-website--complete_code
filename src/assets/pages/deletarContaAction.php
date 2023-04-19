<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../css/action.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Exclusão - MYSQLI</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional"> 
        
        <?php
            require_once ('./conexao.php');
            require_once ('./verificarAcesso.php');

            $sql = "DELETE FROM cadastro WHERE usuario_id = '" . $_SESSION['id'] . "';";
                if ($conexao->query($sql) === TRUE) {
                    echo ' 
                        <h1 class="titulo-ok">Conta Excluída com sucesso! &#9785; </h1> 
                            <a href="../../../index.php"> 
                                <button> OK </button>
                            </a>
                    ';
                } else {
                    echo ' 
                        <a href="./alterarDados.php"> 
                            <h1 class="titulo-erro">ERRO! Tente Novamente.</h1> 
                        </a> 
                        ';
                }
                    $conexao->close();
        ?>
    </div>

</body>
</html>