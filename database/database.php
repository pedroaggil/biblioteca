<?php session_start();

	// Estabelece a conexão com o banco de dados
	// Basta incluir essa página em qualquer outra de extensão PHP, que a conexão será estabelecida

	$mysqli = new mysqli("localhost", "root", "usbw", "library");
	$mysqli->set_charset("utf-8");

	if ($mysqli -> connect_errno) {
		echo "Cuidado com a depressão mas... a conexão com o banco falhou: erro número " . $mysqli -> connect_errno;
	}
?>