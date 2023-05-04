<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/certificados.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <link rel="stylesheet" href="../../css/responsivo/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">

    <title>ProgQuiz - Certificados</title>
</head>

<body>
    <?php require_once('./verificarAcesso.php'); ?>
    <?php require_once('./nav.php'); ?>

    <section class="card-perfil">
        <img class="avatar" src="../imgs/undraw_female_avatar_re_uk8y.svg">
        <h1> <?php echo ($_SESSION['nome']); ?> </h1>
        <p class="username"> @<?php echo ($_SESSION['logado']); ?></p>
        <h2>MEUS CERTIFICADOS</h2>
    </section>

    <div class="margem">
        <div class="certificados">
            <div class="html">
                <h2> <i class="fa-brands fa-html5"></i> HTML</h2>

                <ul class="ul-galeria">
                    <li><a href="#img1"><img src="../imgs/cert-html.jpg" alt="certificado de html" class="min"></a></li>
                    <li><a href="#img2"><img src="../imgs/cert-html-2.jpg" alt="certificado de html" class="min"></a></li>
                    <li><a href="#img3"><img src="../imgs/cert-html-3.jpg" alt="certificado de html" class="min"></a></li>
                </ul>


                <div class="lbox" id="img1">
                    <div class="box_img">
                        <a href="#img10" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-html.jpg">
                        <a href="#img2" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img2">
                    <div class="box_img">
                        <a href="#img1" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-html-2.jpg">
                        <a href="#img3" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img3">
                    <div class="box_img">
                        <a href="#img2" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-html-3.jpg">
                        <a href="#img4" class="btn" id="next">&#187;</a>
                    </div>
                </div>

            </div>

            <div class="css">
                <h2><i class="fa-brands fa-css3-alt"></i> CSS</h2>
                <ul class="ul-galeria">
                    <li><a href="#img4"><img src="../imgs/cert-css.jpg" alt="certificado de css" class="min"></a></li>
                    <li><a href="#img5"><img src="../imgs/cert-css-2.jpg" alt="certificado de css" class="min"></a></li>
                    <li><a href="#img6"><img src="../imgs/cert-css-3.jpg" alt="certificado de css" class="min"></a></li>
                </ul>


                <div class="lbox" id="img4">
                    <div class="box_img">
                        <a href="#img3" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-css.jpg">
                        <a href="#img5" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img5">
                    <div class="box_img">
                        <a href="#img4" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-css-2.jpg">
                        <a href="#img6" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img6">
                    <div class="box_img">
                        <a href="#img5" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-css-3.jpg">
                        <a href="#img7" class="btn" id="next">&#187;</a>
                    </div>
                </div>
            </div>

            <div class="javascript">
                <h2><i class="fa-brands fa-square-js"></i> JAVASCRIPT</h2>
                <ul class="ul-galeria">
                    <li><a href="#img7"><img src="../imgs/cert-js.jpg" alt="certificado de js" class="min"></a></li>
                    <li><a href="#img8"><img src="../imgs/cert-js-2.jpg" alt="certificado de js" class="min"></a></li>
                    <li><a href="#img9"><img src="../imgs/cert-js-3.jpg" alt="certificado de js" class="min"></a></li>
                </ul>


                <div class="lbox" id="img7">
                    <div class="box_img">
                        <a href="#img6" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-js.jpg">
                        <a href="#img8" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img8">
                    <div class="box_img">
                        <a href="#img7" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-js-2.jpg">
                        <a href="#img9" class="btn" id="next">&#187;</a>
                    </div>
                </div>

                <div class="lbox" id="img9">
                    <div class="box_img">
                        <a href="#img8" class="btn" id="prev">&#171;</a>
                        <a href="" class="btn" id="close">X</a>
                        <img src="../imgs/cert-js-3.jpg">
                        <a href="#img1" class="btn" id="next">&#187;</a>
                    </div>
                </div>

            </div>

            <div class="php">
                <h2><i class="fa-brands fa-php"></i> PHP</h2>
                <div class="imagens">
                    <p>Ainda não há certificados</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de Sistemas da
            ETEC. </p>
    </footer>

    <script src="https://kit.fontawesome.com/807636c401.js" crossorigin="anonymous"></script>
</body>

</html>