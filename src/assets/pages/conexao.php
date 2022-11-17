<?php

$servername = 'localhost';
$username = 'root';
$password = 'usbw';
$database = 'tcc';
$conexao = new mysqli($servername, $username, $password, $database);


	if ($conexao->connect_error) {
		die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>