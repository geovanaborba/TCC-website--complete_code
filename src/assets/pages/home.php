<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>ProgQuiz - Home</title>
</head>

<body>
<?php require_once ('./verificarAcesso.php');?>
<?php require_once ('./nav.php');?>

    <div class="margem">
        <section class="container">

            <div class="col-esq">
                <div class="card-perfil">
                    <div class="avatar">
                        <img src="../imgs/undraw_female_avatar_re_uk8y.svg">
                    </div>
                    <div class="infos">
                        <div class="nome-lvl">
                            <h3>Fulana da Silva</h3>
                            <p>Level 11</p>
                        </div>
                        <label for="file">Experiência: 3200/10000</label>
                        <progress id="file" value="32" max="100"> 32% </progress>
                    </div>
                </div>

                <div class="div-cursos">
                    <h3>Meus Quizzes</h3>

                    <div class="quiz-det">
                        <img src="../imgs/css3-original.svg" alt="ícone de css">
                        <p>CSS - Nível iniciante</p>
                    </div>

                    <div class="quiz-det">
                        <img src="../imgs/html5-original.svg" alt="ícone de HTML">
                        <p>HTML - Nível iniciante</p>
                    </div>

                    <div class="quiz-det">
                        <img src="../imgs/javascript-plain.svg" alt="ícone de Javascript">
                        <p>JS - Nível iniciante</p>
                    </div>
                </div>

                <div class="div-cursos">
                    <h3>Meus artigos</h3>
                </div>

                <div class="div-cursos">
                    <h3>Lista de Estudo</h3>
                </div>

                <div class="botao">
                    <a href="./quiz.php">
                        <button class="custom-btn btn-5">
                            <span>Jogar</span>
                        </button>
                    </a>
                </div>
            </div>




            <div class="coluna">
                <h3>FEED</h3>
                <div class="card">
                    <h3>Novas Atualizações</h3>
                    <p>
                        Lorem ipsum dolor sit amet. Sed dolorem pariatur eos praesentium laborum et distinctio quae quo
                        rerum eius. Aut totam aspernatur est corporis molestiae est doloremque aperiam id amet esse non
                        molestias accusamus in necessitatibus nihil et optio eius.
                    </p>
                    <br>
                    <p>
                        Ut eaque totam qui amet similique et odio quia est explicabo delectus? Qui ipsum maxime est
                        consectetur eaque sed magnam nemo aut omnis rerum nam placeat eius et quaerat eaque. Id
                        asperiores
                        veniam et galisum minus aut repellendus vitae aut dolorem tempora!
                    </p>
                    <br>
                    <p>
                        Eos voluptatem minima At necessitatibus accusantium et velit obcaecati eum reiciendis saepe ut
                        voluptatum libero. Non omnis tenetur est perspiciatis nisi nam quas enim nam tempora facere ab
                        voluptatem voluptatibus quo quia dolores.
                    </p>
                </div>

                <div class="card">
                    <h3>Últimos Adicionados</h3>
                    <ul>
                        <li>HTML5 - Nível Extremamente Avançado</li>
                        <li>CSS3 - Nível Extremamente Avançado</li>
                        <li>Javascript - Nível Extremamente Avançado</li>
                        <li>Php - Nível Extremamente Avançado</li>
                        <li>Java - Nível Extremamente Avançado</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Divulgue o ProgQuiz!</h3>
                    <p>Lorem Ipsum.</p>
                </div>
            </div>
        </section>

    </div>

    <footer>
        <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de Sistemas da
            ETEC. </p>
    </footer>

    <script src="https://kit.fontawesome.com/807636c401.js" crossorigin="anonymous"></script>
</body>


</html>