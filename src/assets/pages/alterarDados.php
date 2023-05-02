<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/alterarDados.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <title>ProgQuiz | Alterar Dados</title>

</head>

<body>
    <?php require_once('./verificarAcesso.php'); ?>
    <?php require_once('./nav.php'); ?>
    <?php require_once('./conexao.php'); ?>

    <main>

        <div class="container">
            <h1>Alterar dados</h1>
            <hr>

            <div class="infos">
                <img src="../imgs/undraw_programming_re_kg9v.svg" alt="desenho de homem usando um notebook com outro monitor à esquerda e com uma xícara de café ao lado direito">

                <form action="./alterarDadosAction.php" method="post">
                    <fieldset class="campo">


                        <label>Nome de Usuário</label>
                        <input type="text" required name="txtUsername" value="<?php
                                                                                echo $_SESSION['logado'];
                                                                                ?>">





                        <label>Alterar Nome </label>
                        <input type="text" required name="txtNome" value="<?php
                                                                            echo $_SESSION['nome'];
                                                                            ?>">

                        <label>Alterar E-mail</label>
                        <div class="email">
                            <input type="text" disabled name="txtEmail" value="<?php
                                                                                echo $_SESSION['email'];
                                                                                ?>"><span data-tooltip="Seu e-mail não pode ser alterado, a menos que faça uma solicitação ao suporte."><i class="fa-solid fa-question"></i></span>
                        </div>


                        <label>Alterar senha</label>
                        <input type="text" name="txtSenha" placeholder="Insira a Senha Atual">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Insira a Nova Senha">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Digite Novamente a Nova Senha">

                        <p>Esqueceu sua senha?</p>

                        <button class="btn-alterar">Alterar</button>

                    </fieldset>

                </form>

            </div>

            <hr>

            <div class="btn-deletar">
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

                        <a href="./deletarContaAction.php">
                            <button class="custom-btn btn-Sim"><span>Adeus :( </span><span>Sim, tenho certeza.</span></button>
                        </a>
                    </div>



                </div>
                <p class="frase">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>
            </div>

            <div class="btn-contato">
                <a href="./suporte.php">
                    <button class="btn-suporte">Contatar Suporte</button>
                </a>
                <p class="frase"> Entre em contato com a moderação do site.</p>
            </div>

            <?php
            if ($_SESSION['id'] == 10) {
                echo '
                <div class="btn-moderacao">
                    <a href="./listar.php">
                        <button class="btn-mod">Acessar dados</button>
                        <p class="frase"> Acessar todos os dados de usuários.</p>
                    </a>
                </div>';
            }
            ?>
    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/modal.js"></script>

</body>

</html>