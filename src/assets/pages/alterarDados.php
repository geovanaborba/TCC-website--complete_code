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

    <link rel="stylesheet" href="../../css/responsivo/menu_celular.css"
    media="screen and (min-width: 0) and (max-width: 767px)">
    <link rel="stylesheet" href="../../css/responsivo/menu_tablet.css"
    media="screen and (min-width: 768px) and (max-width: 1000px)">

    <title>ProgQuiz | Alterar Dados</title>

</head>

<body>
    <?php 
if(!isset($_SESSION))
{
	session_start();
} 
    ?>
    
<?php require_once ('./verificarAcesso.php');?>
<?php require_once ('./nav.php');?>
<?php require_once ('./conexao.php');?>

    <main>

        <div class="container">
            <h1>Alterar dados</h1>
            <hr>

            <div class="infos">
                <img src="../imgs/undraw_programming_re_kg9v.svg" alt="desenho de homem usando um notebook com outro monitor à esquerda e com uma xícara de café ao lado direito">

                <form action="./alterarDadosAction.php" method="post">
                    <fieldset class="campo"> 
                    
                    <label>Alterar Nome </label>
                        <input type="text" required name="txtNome" 
                        value="<?php $sql = "SELECT nome FROM cadastro LIMIT 1";
                                $resultado = $conexao->query($sql);
                                    if ($resultado != null) {
                                    foreach ($resultado as $linha) {
                                        echo $linha['nome'];
                                    }
                                    }
                                ?>"
                        >

                        <label>Alterar E-mail</label>
                        <input type="text" required name="txtEmail" 
                        value="<?php $sql = "SELECT email FROM cadastro LIMIT 1"; 
                                $resultado = $conexao->query($sql);
                                    if ($resultado != null) {
                                    foreach ($resultado as $linha) {
                                        echo $linha['email'];
                                    }
                                    }
                                ?>">

                        <label>Alterar Nome de Usuário</label>
                        <input type="text" required name="txtUsername"
                        value="<?php $sql = "SELECT username FROM cadastro LIMIT 1 OFFSET 1"; 
                                $resultado = $conexao->query($sql);
                                    if ($resultado != null) {
                                    foreach ($resultado as $linha) {
                                        echo $linha['username'];
                                    }
                                    }
                                ?>">

                        <label>Alterar senha</label>
                        <input type="text" name="txtSenha" placeholder="Insira a Senha Atual">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Insira a Nova Senha">

                        <input type="text" name="senha-atual" id="senha-atual" placeholder="Digite Novamente a Nova Senha">

                        <p>Esqueceu sua senha?</p>

                        <button class="btn-alterar">Alterar</button>

                    </fieldset>

                </form>

            </div>



            <!-- Trigger/Open The Modal -->

            <button id="btn-modal">Deletar conta</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Tem certeza que quer deletar sua conta?</h1>
                    <br>
                    <p>Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>
                    <p>Sentiremos sua falta! :( </p>
                    <br>

                    <a href="./deletarContaAction.php">
                        <button class="custom-btn btn-Sim"><span>Adeus :( </span><span>Sim, tenho certeza.</span></button>
                    </a>
                </div>
            </div>

            <p class="frase-deletar">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>

    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/modal.js"></script>

</body>

</html>