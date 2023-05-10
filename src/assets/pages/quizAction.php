<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<?php
error_reporting(0);
require_once('./verificarAcesso.php'); 
 require_once('./nav.php'); 
 require_once('./conexao.php'); 


$pontuacao = $_REQUEST['pontuacao']; //request recebe post e get

$sql = "UPDATE cadastro SET pontuacao = '$pontuacao' WHERE usuario_id =" . $_SESSION['id'] . ";";

// código abaixo cria um arquivo .txt para mostrar possíveis erros:
// $arquivo = "meu_arquivo.txt";
// $fp = fopen($arquivo, "a+");
// fwrite($fp, $sql);
// fclose($fp);
$resultado = $conexao->query($sql);

?>