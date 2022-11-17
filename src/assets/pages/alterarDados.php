<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/alterarDados.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">

    <title>ProgQuiz | Alterar Dados</title>

</head>

<body>

    <nav>
        <header>
            <a href="./home.php">
                <h1>ProgQuiz</h1>
            </a>
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

    <main>

        <div class="container">
            <h1>Alterar dados</h1>

            <div class="infos">
                <img src="../imgs/undraw_programming_re_kg9v.svg"
                    alt="desenho de homem usando um notebook com outro monitor à esquerda e com uma xícara de café ao lado direito">

                <form method="POST">
                    <fieldset class="campo">

                        <label>Alterar Nome </label>
                        <input type="text" name="nome" id="nome">

                        <label>Alterar E-mail</label>
                        <input type="text" name="email" id="email">

                        <label>Alterar Nome de Usuário</label>
                        <input type="text" name="username" id="username">

                        <label>Alterar senha</label>
                        <input type="text" name="senha-antiga" id="senha-antiga" placeholder="Insira a Senha Atual">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Insira a Nova Senha">

                        <input type="text" name="senha-atual" id="senha-atual"
                            placeholder="Digite Novamente a Nova Senha">

                        <p>Esqueceu sua senha?</p>
                    </fieldset>

                    <button class="btn-enviar" type="submit">Enviar</button>

                </form>

            </div>
        </div>

    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>

</body>

</html>