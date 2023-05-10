<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/quiz.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>ProgQuiz - Questões</title>

</head>

<body>
    
    <?php 
        require_once('./verificarAcesso.php'); 
        require_once('./nav.php'); 
        require_once('./conexao.php'); 
    ?>

    <div class="margem">

        <!-- Created By CodingNepal - www.codingnepalweb.com  -->

        <div class="boas-vindas">
            <h1>Olá, <?php echo $_SESSION['logado'] ?></h1>
            <div id="pontos">
                <p>Sua maior pontuação é:</p>
                <p class="p-pontos">
                    <?php 
                        $sql = "SELECT pontuacao FROM cadastro WHERE usuario_id =" . $_SESSION['id'] . ";";
                        $resultado = $conexao->query($sql);
                        if ($resultado != null)
                            foreach ($resultado as $linha) {
                                echo '<td>' . $linha['pontuacao']  . '</td>';
                                echo '<td> <p ='. '&pontuacao=' . $linha['pontuacao'] . '"></td>';
                            }
                    ?>
                </p>
            </div>

            <!-- Botão de iniciar Quiz -->
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
        </div>

        <!-- Caixa de informação -->
        <div class="info_box">
            <div class="info-title"><span>Regras do Quiz</span></div>
            <div class="info-list">
                <div class="info"><span>1. O quiz é composto por 25 questões. </span><br>Reserve um tempo para respondê-las.</div>
                <div class="info">2. Você tem apenas <span>20 segundos</span> para responder cada questão.</div>
                <div class="info">3. Uma vez respondida, a questão não pode ser respondida novamente.</div>
                <div class="info">4. Você não deve sair do quiz enquanto o responde.</div>
                <div class="info">5. A sua pontuação será com base no número de acertos.<span>Cada acerto lhe dá 10 pontos.</span> </div>
            </div>
            <div class="buttons">
                <button class="quit">Sair</button>
                <button class="restart">Continuar</button>
            </div>
        </div>

        <!-- Caixa do Quiz -->
        <div class="quiz_box">
            <header>
                <div class="title-box">
                    <img src="https://i.ibb.co/TYn513S/progquiz.png">
                </div>
                <div class="timer">
                    <div class="time_left_txt">Tempo restante</div>
                    <div class="timer_sec">20</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Aqui foi inserida a pergunta do JavaScript -->
                </div>
                <div class="option_list">
                    <!-- Aqui foram inseridas as alternativas/opções do JavaScript -->
                </div>
            </section>

            <!-- Rodapé da caixa do Quiz -->
            <footer>
                <div class="total_que">
                    <!-- Aqui foi inserido o número de contagem de perguntas do JavaScript -->
                </div>
                <button class="next_btn">Próximo</button>
            </footer>
        </div>

        <!-- Caixa com Resultado -->
        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">Você completou o quiz!</div>
            <div class="score_text">
                <!-- Aqui foi inserido o Resultado final do JavaScript (reação, nº de acertos e pontuação) -->
            </div>
            <div class="buttons">
                <button class="restart">Jogar de Novo</button>
                <button class="quit">Sair</button>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/scriptcopy.js"></script>
    <script src="../../js/questions.js"></script>
</body>

</html>