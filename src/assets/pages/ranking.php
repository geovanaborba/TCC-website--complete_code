<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/ranking.css">
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
    <nav>
        <header>
            <h1>ProgQuiz</h1>
        </header>

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
                        <a href="../../../index.php">
                            <li class="li-dropdown">Deslogar</li>
                        </a>
                    </ul>
                </li>
        </div>
    </nav>



    <body>

        <div class="margem">
            <section class="top-3">

                <a href="#">
                    <div class="nome">
                        <div class="card">
                            <img src="../imgs/undraw_male_avatar_re_hguk.svg">
                            <i class="fa-solid fa-crown prata"></i>
                            <h3>Pessoa de Araújo</h3>
                            <p>Melhor pontuação: <br>
                                870
                            </p>
                        </div>
                    </div>
                </a>


                <a href="#">
                    <div class="nome">
                        <div class="card-meio">
                            <img src="../imgs/undraw_female_avatar_re_uk8y.svg">
                            <i class="fa-solid fa-crown ouro"></i>
                            <h3>Fulana da Silva</h3>
                            <p>Melhor pontuação: <br>
                                999
                            </p>
                        </div>
                    </div>
                </a>
                

                <a href="#">
                    <div class="nome">
                        <div class="card">
                            <img src="../imgs/undraw_profile_pic_re_upir.svg">
                            <i class="fa-solid fa-crown bronze"></i>
                            <h3>Menina Santos</h3>
                            <p>Melhor pontuação: <br>
                                830
                            </p>
                        </div>
                    </div>
                </a>

            </section>


            <section class="ranking">

                <div class="lista-container">

                    <div class="lista">
                        <span class="lista-posicao">4th</span>
                        <img src="../imgs/undraw_profile_pic_re_upir.svg">
                        <span class="lista-posicao">Joana Gonçalves</span>
                        <span class="lista-quiz">Melhor pontuação: 800</span>
                        <button class="lista-botao">Ver perfil</button>
                    </div>

                    <div class="lista">
                        <span class="lista-posicao">5th</span>
                        <img src="../imgs/undraw_male_avatar_re_hguk.svg">
                        <span class="lista-posicao">Felipe Santana</span>
                        <span class="lista-quiz">Melhor pontuação: 784</span>
                        <button class="lista-botao">Ver perfil</button>
                    </div>

                    <div class="lista">
                        <span class="lista-posicao">6th</span>
                        <img src="../imgs/undraw_female_avatar_re_uk8y.svg">
                        <span class="lista-posicao">Marina Sena</span>
                        <span class="lista-quiz">Melhor pontuação: 725</span>
                        <button class="lista-botao">Ver perfil</button>
                    </div>

                    <div class="lista">
                        <span class="lista-posicao">7th</span>
                        <img src="../imgs/undraw_male_avatar_re_hguk.svg">
                        <span class="lista-posicao">Caio Dacielo</span>
                        <span class="lista-quiz">Melhor pontuação: 679</span>
                        <button class="lista-botao">Ver perfil</button>
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