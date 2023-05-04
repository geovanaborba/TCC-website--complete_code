<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<?php require_once('./verificarAcesso.php'); ?>
<?php require_once('./nav.php'); ?>
<?php require_once('./conexao.php'); ?>

<?php
    $pontuacao = $_POST['userPoints'];
    // $sql= "UPDATE pontuacao FROM cadastro SET pontuacao =" . $_POST['userPoints'] . ";";
    $sql = "UPDATE cadastro SET pontuacao = ". $_POST['userPoints']." WHERE usuario_id =" . $_SESSION['id'] . ";";
    $resultado = $conexao->query($sql);
?>