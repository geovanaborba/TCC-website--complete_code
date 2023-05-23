<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/deletarConta.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scroll.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Excluir - MYSQLI</title>
</head>

<body>

    <?php
    require_once('./verificarAcesso.php');
    require_once('./nav.php');
    ?>


    <div class="margem">

        <div class="formulario">

            <button class="btn-cancelar">
                <a href="./listar.php">
                    <i class="fa fa-ban"></i>
                    <p>CANCELAR EXCLUSÃO</p>
                </a>
            </button>

            <form action="./deletarContaModAction.php" method='POST'>

                <h1 class="id">EXCLUIR - ID: <?php echo " " . $_GET['id'] ?> </h1>

                <input name="txtID" type="hidden" value="<?php echo $_GET['id'] ?>">

                <label>Nome</label>
                <input name="txtNome" disabled value="<?php echo $_GET['nome'] ?>">

                <label>Nome de Usuário</label>
                <input name="txtUsername" disabled value="<?php echo $_GET['username'] ?>">

                <label>Email</label>
                <input name="txtEmail" disabled value="<?php echo $_GET['email'] ?>">
            </form>

            <!-- Trigger/Open The Modal -->
            <button id="btn-modal"><i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Tem certeza que quer excluir essa conta?</h2>
                    <form action="./deletarContaModAction.php" method='POST'>
                        <input name="txtID" type="hidden" value="<?php echo $_GET['id'] ?>">
                    <br>
                    <p>Depois de excluir, não há como voltar atrás. Por favor, tenha certeza ao fazer isso.</p>
                    <br>

                    <a href="./deletarContaModAction.php">
                        <button class="custom-btn btn-Sim"><span>Excluir</span><span>Sim, tenho certeza.</span></button>
                    </a>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
    <script src="../../js/modal.js"></script>
</body>

</html>