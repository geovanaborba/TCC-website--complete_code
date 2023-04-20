<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/estudos.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <link rel="stylesheet" href="../../css/responsivo/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>ProgQuiz - Ranking</title>
</head>

<body>
    <?php require_once('./verificarAcesso.php'); ?>
    <?php require_once('./conexao.php'); ?>
    <?php require_once('./nav.php'); ?>

    <div class="margem">

        <div class="boas-vindas">
            <div class="frases">
                <h1>Olá, <?php echo $_SESSION['logado'] ?>! </h1>
                <h2>Que bom te ver por aqui!</h2>
            </div>
            <p>Acompanhe o seu desempenho até agora: </p>
        </div>

        <div class="estudos">

            <div class="barras">
                <div class="barra1">
                    <h3>HTML</h3>
                    <div class="circular">
                        <div class="inner"></div>
                        <div class="outer"></div>
                        <div class="numb">
                            0%
                        </div>
                        <div class="circle">
                            <div class="dot">
                                <span></span>
                            </div>
                            <div class="bar left">
                                <div class="progress"></div>
                            </div>
                            <div class="bar right">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="barra2">
                    <h3>CSS</h3>
                    <div class="circular2">
                        <div class="interno2"></div>
                        <div class="externo2"></div>
                        <div class="numero">
                            0%
                        </div>
                        <div class="circulo2">
                            <div class="ponto2">
                                <span></span>
                            </div>
                            <div class="barra2 esquerda2">
                                <div class="progresso2"></div>
                            </div>
                            <div class="barra2 direita2">
                                <div class="progresso2"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="barra3">
                    <h3>JavaScript</h3>
                    <div class="circular3">
                        <div class="interno3"></div>
                        <div class="externo3"></div>
                        <div class="numero">
                            0%
                        </div>
                        <div class="circulo3">
                            <div class="ponto3">
                                <span></span>
                            </div>
                            <div class="barra3 esquerda3">
                                <div class="progresso3"></div>
                            </div>
                            <div class="barra3 direita3">
                                <div class="progresso3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="estudar">
                <div class="card">
                    <ol>
                        <li>Introdução ao JavaScript</li>
                        <li>Conceitos de função e protótipo</li>
                        <li>Entenda o DOM</li>
                        <li>Javascript assíncrono</li>
                        <li>Programação Orientada a Objeto</li>
                        <li>...</li>
                    </ol>
                </div>
                <div class="estudar-titulo">
                    <h3>Estudar</h3>
                </div>
            </div>

        </div>

        <footer>
        <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de Sistemas da
            ETEC. </p>
    </footer>
    </div>





    <script src="https://kit.fontawesome.com/807636c401.js" crossorigin="anonymous"></script>
    <script src="../../js/circular-progress.js"></script>
</body>

</html>