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
                <div class="imagens">
                    <img src="../imgs/cert-html.jpg" alt="certificado de html">
                    <img src="../imgs/cert-html.jpg" alt="certificado de html">
                    <img src="../imgs/cert-html.jpg" alt="certificado de html">
                </div>
            </div>

            <div class="css">
                <h2><i class="fa-brands fa-css3-alt"></i> CSS</h2>
                <div class="imagens">
                    <img src="../imgs/cert-css.jpg" alt="certificado de css">
                    <img src="../imgs/cert-css.jpg" alt="certificado de css">
                    <img src="../imgs/cert-css.jpg" alt="certificado de css">
                </div>
            </div>

            <div class="javascript">
                <h2><i class="fa-brands fa-square-js"></i> JAVASCRIPT</h2>
                <div class="imagens">
                    <img src="../imgs/cert-js.jpg" alt="certificado de javascript">
                    <img src="../imgs/cert-js.jpg" alt="certificado de javascript">
                    <img src="../imgs/cert-js.jpg" alt="certificado de javascript">
                    <img src="../imgs/cert-js.jpg" alt="certificado de javascript">
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