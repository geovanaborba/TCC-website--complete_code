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

    <link rel="stylesheet" href="../../css/alterarDados.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <title>ProgQuiz | Alterar Dados</title>

</head>

<body>

<?php require_once ('./nav.php');?>

    <main>

        <div class="container">
            <h1>Alterar dados - MODERAÇÃO</h1>
            <hr>

            <div class="infos">
                <img src="../imgs/undraw_programming_re_kg9v.svg" alt="desenho de homem usando um notebook com outro monitor à esquerda e com uma xícara de café ao lado direito">

                <form action="./alterarDadosAction.php" method="post">
                    <fieldset class="campo">

                        <label>Alterar Nome </label>
                        <input type="text" name="txtNome" value="<?php echo $_GET['nome'] ?>">

                        <label>Alterar E-mail</label>
                        <input type="text" name="txtEmail" value="<?php echo $_GET['email'] ?>">

                        <label>Alterar Nome de Usuário</label>
                        <input type="text" name="txtUsername" value="<?php echo $_GET['username'] ?>">

                        <label>Alterar senha</label>

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Insira a Nova Senha">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Digite Novamente a Nova Senha">


                        <button class="btn-alterar">Alterar</button>

                    </fieldset>

                </form>

            </div>

    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    

</body>

</html>