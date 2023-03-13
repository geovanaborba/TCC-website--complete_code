<?php


$servername = getenv('envServername');
$username = getenv('envUsername');
$password = getenv('envPassword');
$database = getenv('envDatabase');
$conexao = new mysqli($servername, $username, $password, $database);


	if ($conexao->connect_error) {
		die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>