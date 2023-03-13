<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">


    <title>ProgQuiz - Trabalho de Conclusão de Curso</title>
</head>

<body>
    <div class="container">

        <nav>
            <ul>
                <a href="./src/assets/pages/login.php">
                    <li>Entrar</li>
                </a>
                <a href="./src/assets/pages/cadastro.php">
                    <li>Cadastrar</li>
                </a>
            </ul>
        </nav>


        <header>
            <img src="./src/assets/imgs/undraw_version_control_re_mg66.svg"
                alt="imagem de avatar masculino sentado com um notebook no colo">

            <div id="text"></div>

        </header>

        <main>
            <div class="buttons">


                <!-- Trigger/Open The Modal -->
                <button id="btn-modal">Como jogar</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Como jogar??</h1>
                        <br>
                        <p>É necessário realizar login para que seu ranking e pontuações fiquem salvas. </p>
                        <p>Dessa maneira, você pode aprender e revisar tudo o que já viu quando voltar! :) </p>
                        <br>
                        Aproveite e preencha seu perfil para conhecer novas pessoas e trocar conhecimentos!
                        <br>
                        Bom aprendizado e divirta-se!!
                    </div>
                </div>


                <a href="./src/assets/pages/ranking_index.php">
                    <button class="btn-pontuacao">Mostrar Ranking</button>
                </a>
            </div>
        </main>

        <section class="acesso">

            <a href="https://www.apple.com/br/app-store/" target="_blank">
                <img class="app-store" src="./src/assets/imgs/Download_on_the_App_Store_Badge.svg.png"
                    alt="botão faça download na App Store"></a>

            <a href="https://play.google.com/store/games?utm_source=latam_Med&utm_medium=hasem&utm_content=Jul1520&utm_campaign=Evergreen&pcampaignid=MKT-FDR-latam-br-1002290-Med-hasem-py-Evergreen-Jul1520-Text_Search_BKWS-28432345789&gclid=CjwKCAjw7p6aBhBiEiwA83fGugbTKBppJ8kOtxO3xg0kzHshHG0x2YBwNq1Y035I6jNupZOU22KZ4BoCJrgQAvD_BwE&gclsrc=aw.ds"
                target="_blank">
                <img class="play-store" src="./src/assets/imgs/pt-br_badge_web_generic.png"
                    alt="botão faça download na Play Store"></a>
        </section>

    </div>
    <footer>

        <div class="rodape">
            <div class="credito">
                <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de
                    Sistemas da
                    ETEC de 2023. </p>
                <br>
                <p>Desenvolvido com <i class="fa-solid fa-heart fa-beat"></i> pelo Grupo 05. </p>
            </div>

            <div class="integrantes">
                <h3>Integrantes do TCC:</h3>

                <a href="#" target="_blank">
                    <p>Arthur Luna</p>
                </a>
                <a href="#" target="_blank">
                    <p>Bruno Hideo</p>
                </a>
                <a href="#" target="_blank">
                    <p>Eduardo Guerts</p>
                </a>
                <a href="https://www.linkedin.com/in/geovanaborba/" target="_blank">
                    <p>Geovana Borba</p>
                </a>
                <a href="#" target="_blank">
                    <p>Naíra Ferraz</p>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="./src/js/modal.js"></script>
    <script src="./src/js/textAnimation.js"></script>
</body>



</html>