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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">

    <title>ProgQuiz - Ranking</title>
</head>

<body>
<?php require_once ('./verificarAcesso.php');?>
<?php require_once ('./nav.php');?>

    <div class="margem">

        <section class="estudos">

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
                        <div class="interno"></div>
                        <div class="externo"></div>
                        <div class="numero">
                            0%
                        </div>
                        <div class="circulo">
                            <div class="ponto">
                                <span></span>
                            </div>
                            <div class="barra esquerda">
                                <div class="progresso"></div>
                            </div>
                            <div class="barra direita">
                                <div class="progresso"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="barra3">
                    <h3>Javascript</h3>
                    <div class="circular3">
                        <div class="interno"></div>
                        <div class="externo"></div>
                        <div class="numero">
                            0%
                        </div>
                        <div class="circulo">
                            <div class="ponto">
                                <span></span>
                            </div>
                            <div class="barra esquerda">
                                <div class="progresso"></div>
                            </div>
                            <div class="barra direita">
                                <div class="progresso"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="estudar">
                <div class="card">
                    <ol>
                        <li>Tags Semânticas</li>
                        <li>Variáveis</li>
                        <li>Lógica de programação</li>
                    </ol>
                </div>
                <div class="estudar-titulo">
                    <h3>Estudar</h3>
                </div>
            </div>

        </section>
    </div>



    <footer>
        <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de
            Sistemas da
            ETEC. </p>
    </footer>

    <script src="https://kit.fontawesome.com/807636c401.js" crossorigin="anonymous"></script>
    <script src="../../js/circular-progress.js"></script>
</body>

</html>