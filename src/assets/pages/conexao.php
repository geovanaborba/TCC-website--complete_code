<?php

require_once ('../../../global.php');

$servername = $_ENV['BANCO_LINK'];
$username = $_ENV['BANCO_USUARIO'];
$password = $_ENV['BANCO_SENHA'];
$database = $_ENV['BANCO_NOME'];
//>> $variavel = getenv('variavel_da_env'); << também funciona, porém utilizar a variável superglobal $_ENV['']; OU $_SERVER['']; são mais recomendadas. 

$conexao = new mysqli($servername, $username, $password, $database);

$form = $_ENV['LINK_FORM'];

	if ($conexao->connect_error) {
		die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>