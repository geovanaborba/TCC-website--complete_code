<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista de Cadastros - Moderação</title>
</head>

<body>
<?php require_once ('./verificarAcesso.php');?>
    <a href="./home.php" class="w3-display-topleft"> <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i> </a>

    <?php

    require_once './conexao.php';
    echo ' 
                                                                                                                                            <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin"> 
                                                                                                                
                           <h1 class="w3-center w3-teal w3-round-large w3-margin">Lista de Cadastros - Moderação </h1> 

                           <table class="w3-table-all w3-centered"> 
                           
                           <thead> 
                           <tr class="w3-center w3-teal"> 
                           <th>ID</th> 
                           <th>Nome</th> 
                           <th>Nome de Usuário</th> 
                           <th>Email</th> 
                           <th>Excluir</th> 
                           <th>Atualizar</th> 
                           </tr> <thead> ';
    $sql = "SELECT * FROM cadastro";
    $resultado = $conexao->query($sql);
    if ($resultado != null)
        foreach ($resultado as $linha) {
            echo '<tr>';
            echo '<td>' . $linha['usuario_id'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['username'] . '</td>';
            echo '<td>' . $linha['email'] . '</td>';
            echo '<td>
                                                                                                                                                <a href="./deletarConta.php?id=' . $linha['usuario_id'] . '&nome=' . $linha['nome'] .
                '&username=' . $linha['username'] . '&email=' . $linha['email'] . '">
                                                                                                                                                <i class="fa fa-user-times w3-large w3-text-teal"></i> 
                                                                                                                                                </a>
                                                                                                                                                </td>
                                                                                                                                                </td>';
            echo '<td>
                                                                                                                                                <a href="./alterarDadosMod.php?id=' . $linha['usuario_id'] . '&nome=' . $linha['nome'] .
                '&username=' . $linha['username'] . '&email=' . $linha['email'] . '">
                                                                                                                                                <i class="fa fa-refresh w3-large w3-text-teal""></i>
                                                                                                                                                </a>
                                                                                                                                                </td>
                                                                                                                                                </td>';
            echo '</tr>';
        }
    echo ' </table> 
                                                                                                                                            </div>';
    $conexao->close();
    ?>
    </div>
</body>

</html>