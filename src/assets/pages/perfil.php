<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/perfil.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <link rel="stylesheet" href="../../css/responsivo/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&family=Roboto+Mono&display=swap" rel="stylesheet">

    <title>ProgQuiz - Perfil</title>
</head>

<body>
    <?php require_once('./verificarAcesso.php');
    session_start() ?>
    <?php require_once('./nav.php'); ?>
    <?php require_once('./conexao.php'); ?>

    <div class="banner">

        <div class="card-perfil">
            <img class="avatar" src="../imgs/undraw_female_avatar_re_uk8y.svg">
            <div class="usuario">
                <h1><?php


                    $sql = "SELECT nome FROM cadastro LIMIT 1";
                    $resultado = $conexao->query($sql);
                    if ($resultado != null) {
                        foreach ($resultado as $linha) {
                            echo '<td>' . $linha['nome']  . '</td>';
                            echo '<td>
                                <p =' . '&nome=' . $linha['nome'] . '">
                                </td>';
                        }
                    }
                    ?>
                </h1>
                <p class="username">@<?php echo $_SESSION['logado']; ?></p>
                <p class="nivel">Nível 11</p>
                <label for="file">Experiência: 3200/10000</label><br>
                <progress id="file" value="32" max="100"> 32% </progress>
            </div>
        </div>


        <div class="contatos">
            <ul>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    11 9xxxx - xxxx
                </li>

                <li>
                    <i class="fa-solid fa-location-pin"></i>
                    São Paulo, SP
                </li>

                <li><i class="fa-solid fa-cake-candles"></i>01/01/2001</li>
            </ul>

            <div class="contatos-detalhes">
                <ul>
                    <li>
                        <i class="fa-solid fa-briefcase"></i> Desenvolvedora de software
                    </li>

                    <li class="frase">"Primeiro resolva o problema. Depois escreva o código"</li>
                </ul>
            </div>
        </div>
    </div>


    <main class="card-infos">
        <div class="cartao">

            <div class="conteudo">
                <ul class="abas">
                    <li class="aba selecionado" id="sobre-mim">
                        <h3>Sobre Mim</h3>
                    </li>

                    <li class="aba" id="minhas-redes">
                        <h3>Minhas Redes</h3>
                    </li>

                    <li class="aba" id="minhas-conquistas">
                        <h3>Conquistas</h3>
                    </li>
                </ul>

                <div class="informacoes-abas">
                    <div class="informacao selecionado" id="informacao-sobre-mim">

                        <div class="descricao">
                            <div class="sobre-mim">
                                <div class="card">
                                    <h3>Sobre Mim</h3>

                                    <p>
                                        Lorem ipsum dolor sit amet. Sed dolorem pariatur eos praesentium laborum et
                                        distinctio quae quo
                                        rerum eius. Aut totam aspernatur est corporis molestiae est doloremque aperiam
                                        id
                                        amet esse non
                                        molestias accusamus in necessitatibus nihil et optio eius.
                                    </p>
                                    <br>
                                    <p>
                                        Ut eaque totam qui amet similique et odio quia est explicabo delectus? Qui ipsum
                                        maxime est
                                        consectetur eaque sed magnam nemo aut omnis rerum nam placeat eius et quaerat
                                        eaque.
                                        Id asperiores
                                        veniam et galisum minus aut repellendus vitae aut dolorem tempora!
                                    </p>
                                    <br>
                                    <p>
                                        Eos voluptatem minima At necessitatibus accusantium et velit obcaecati eum
                                        reiciendis saepe ut
                                        voluptatum libero. Non omnis tenetur est perspiciatis nisi nam quas enim nam
                                        tempora
                                        facere ab
                                        voluptatem voluptatibus quo quia dolores.
                                    </p>
                                </div>

                                <div class="card">
                                    <h3>Skills</h3>
                                    <ul>
                                        <li>HTML5</li>
                                        <li>CSS3</li>
                                        <li>Javascript</li>
                                        <li>Php</li>
                                        <li>Java</li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <h3>Formação Acadêmica</h3>
                                    <ul>
                                        <li>Técnico em Desenvolvimento de Sistemas - ETEC</li>
                                        <br>
                                        <li>Técnico em Informática </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="informacao" id="informacao-minhas-redes">
                        <div class="card">
                            <h3 class="sub-titulo">Minhas redes</h3>
                            <ul class="redes-sociais">

                                <li>
                                    <a href="#" target="_blank" class="curriculo"><i class="fa-solid fa-file"></i>
                                        Currículo</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="fa-brands fa-linkedin"></i>
                                        LinkedIn</a>
                                </li>
                                <li>
                                    <a href="https://www.github.com/" target="_blank" class="github"><i class="fa-brands fa-github"></i>
                                        GitHub</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" class="email"><i class="fa-solid fa-envelope"></i>
                                        E-mail</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="informacao" id="informacao-minhas-conquistas">
                        <div class="card">
                            <h3 class="sub-titulo">Minhas Conquistas</h3>
                            <div class="conquistas">
                                <div class="img-selo">
                                    <img src="../imgs/css3-original.svg" alt="">
                                    <span>Introdução ao CSS</span>
                                </div>

                                <div class="img-selo">
                                    <img src="../imgs/git-original.svg" alt="">
                                    <span>Git</span>
                                </div>

                                <div class="img-selo">
                                    <img src="../imgs/html5-original.svg" alt="">
                                    <span>HTML</span>
                                </div>

                                <div class="img-selo">
                                    <img src="../imgs/javascript-plain.svg" alt="">
                                    <span>Introdução ao Javascript</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de Sistemas da
            ETEC. </p>
    </footer>

    <script src="https://kit.fontawesome.com/807636c401.js" crossorigin="anonymous"></script>
    <script src="../../js/perfil.js"></script>
</body>


</html>