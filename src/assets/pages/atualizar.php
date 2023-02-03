<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/alterarDados.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <title>ProgQuiz | Alterar Dados</title>

</head>

<body>
<?php require_once ('./verificarAcesso.php');?>
<?php require_once ('./nav.php');?>

    <main>

        <div class="container">
            <h1>Alterar dados</h1>
            <hr>

            <?php
            require_once './conexao.php';
            ?>

            <div class="infos">
                <img src="../imgs/undraw_programming_re_kg9v.svg" alt="desenho de homem usando um notebook com outro monitor à esquerda e com uma xícara de café ao lado direito">


                <?php
                    
                    require_once './conexao.php';
                                                                                                                                        
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
                                                                                                                                            <a href="./alterarDados.php?id=' . $linha['usuario_id'] . '&nome=' . $linha['nome'] . 
                                                                                                                                            '&username=' . $linha['username'] . '&email=' . $linha['email'] . '">
                                <button class="btn-alterar">Alterar Dados Pessoais</button>
                                </a>
        
                                <button class="btn-alterar">Alterar Senha</button>
    
                                                                                                                                            </td>
                                                                                                                                            </td>';

                                                                                                                                            echo '</tr>';
                                                                                                                                        }
                                                                                                                                        echo ' </table> 
                                                                                                                                        </div>';
                                                                                                                                        $conexao->close(); 
                                                                                                                                        ?> 
                                                                                                                                    </div>
                                                                                                                                    </div>
                                                                                                                   



            <!-- Trigger/Open The Modal -->

            <button id="btn-modal">Deletar conta</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Tem certeza que quer deletar sua conta?</h1>
                    <br>
                    <p>Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>
                    <p>Sentiremos sua falta! :( </p>
                    <br>

                    <a href="./deletarConta.php?id=' . $linha['usuario_id'] . '&nome=' . $linha['nome'] . 
                                                                                                                                            '&username=' . $linha['username'] . '&email=' . $linha['email'] . '">
                        <button class="custom-btn btn-Sim"><span>Adeus :( </span><span>Sim, tenho certeza.</span></button>
                    </a>
                </div>
            </div>

            <p class="frase-deletar">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>

    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/modal.js"></script>

</body>

</html>