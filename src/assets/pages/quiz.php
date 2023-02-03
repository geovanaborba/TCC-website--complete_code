<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/quiz.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">

    <title>ProgQuiz - Questões</title>

</head>

<body>
<?php require_once ('./verificarAcesso.php');?>
    <nav>
        <div class="titulo">
            <a href="./home.php">
                <h1>ProgQuiz</h1>
        </div class="titulo">
        </a>

        <div class="menu">
            <ul>
                <a href="./home.php">
                    <li>Início</li>
                </a>
                <a href="./ranking.php">
                    <li>Ranking</li>
                </a>
                <a href="./estudos.php">
                    <li>Estudos</li>
                </a>
                <a href="./perfil.php">
                    <li>Perfil</li>
                </a>

                <li><i class="fa-solid fa-gear"></i>
                    <ul class="dropdown">
                        <li class="li-dropdown">Alterar foto de perfil</li>
                        <a href="./alterarDados.php">
                            <li class="li-dropdown">Alterar dados</li>
                        </a>
                        <li class="li-dropdown">Ver certificados</li>
                        <a href="./logoutAction.php">
                            <li class="li-dropdown">Deslogar</li>
                        </a>
                    </ul>
                </li>
        </div>
    </nav>

    <div class="margem">

        <!-- Created By CodingNepal - www.codingnepalweb.com  -->
        <a href="./home.php">

        </a>

        <!-- start Quiz button -->
        <div class="botoes_inicio">
            <div class="start_btn">
                <button>Começar quiz
                </button>
            </div>

            <a href="./home.php">
                <div class="voltar_btn">
                    <button>Voltar ao Início</button>
                </div>
            </a>
        </div>

        <!-- Info Box -->
        <div class="info_box">
            <div class="info-title"><span>Regras do Quiz</span></div>
            <div class="info-list">
                <div class="info">1. Você tem apenas <span>15 segundos</span> para responder cada questão.</div>
                <div class="info">2. Uma vez respondida, a questão não pode ser respondida novamente.</div>
                <div class="info">3. Você não deve sair do quiz enquanto o responde.</div>
                <div class="info">4. A sua pontuação será com base no número de acertos.</div>
            </div>
            <div class="buttons">
                <button class="quit">Sair</button>
                <button class="restart">Continuar</button>
            </div>
        </div>

        <!-- Quiz Box -->
        <div class="quiz_box">
            <header>
                <div class="title-box">
                    <img src="https://i.ibb.co/TYn513S/progquiz.png">
                </div>
                <div class="timer">
                    <div class="time_left_txt">Tempo restante</div>
                    <div class="timer_sec">15</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Here I've inserted question from JavaScript -->
                </div>
                <div class="option_list">
                    <!-- Here I've inserted options from JavaScript -->
                </div>
            </section>

            <!-- footer of Quiz Box -->
            <footer>
                <div class="total_que">
                    <!-- Here I've inserted Question Count Number from JavaScript -->
                </div>
                <button class="next_btn">Próximo</button>
            </footer>
        </div>

        <!-- Result Box -->
        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">Você completou o quiz!</div>
            <div class="score_text">
                <!-- Here I've inserted Score Result from JavaScript -->
            </div>
            <div class="buttons">
                <button class="restart">Jogar de Novo</button>
                <button class="quit">Sair</button>
            </div>
        </div>

    </div>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/questions.js"></script>
</body>

</html>