<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/suporte.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">
    <link rel="stylesheet" href="../../css/responsivo/footer.css">

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css" media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css" media="screen and (min-width: 768px) and (max-width: 1000px)">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <title>Suporte - ProgQuiz</title>

</head>

<body>

    <?php
    require_once('./verificarAcesso.php');
    require_once('./nav.php');
    require_once('./conexao.php');
    require_once('../../../global.php');
    ?>

    <section class="contato">
        <div class="esquerda-col">
        </div>
        <div class="direita-col">
            <h1 class="contato-titulo">CONTATO</h1>
            <p class="contato-descricao">

                Tem alguma dúvida ou precisa de ajuda?
                <br>
                Nosso suporte ficará feliz em te ajudar!

            </p>

            <form action= "https://formspree.io/f/mjvdjgze" method="POST">
                <fieldset class="campo">

                    <p class="nome-logado">Olá, <?php echo $_SESSION['logado'] ?> !!</p>
                    <div>
                        <label>Seu ID de usuário é: </label>
                        <input type="text" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION['id'] ?>" readonly>
                    </div>

                    <div>
                        <label>Escolha o seu possível problema </label>
                        <select id="mySelect" required name="problema">
                            <option value="" data-default disabled selected></option>
                            <option>Estou com problemas em alterar meus dados</option>
                            <option>Quero trocar meu nome de usuário</option>
                            <option>Não consigo ver meu nome no ranking</option>
                            <option>Não recebo emails</option>
                            <option>Quero denunciar um perfil</option>
                            <option>Tenho dúvida quanto ao uso do quiz</option>
                            <option>Outros</option>
                        </select>

                    </div>

                    <div id="novo-nome">
                        <label> Insira o novo nome de usuário </label>
                        <input type="text" name="novo-username">
                    </div>

                </fieldset>

                <div class="campo">
                    <br>
                    <label>Por favor, nos explique sua situação:</label>
                    <textarea id="mensagem" name="mensagem"></textarea>
                </div>

                <button class="btn-enviar" type="submit">Enviar</button>

            </form>
        </div>
    </section>


    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/contato-nome.js"></script>

</body>

</html>