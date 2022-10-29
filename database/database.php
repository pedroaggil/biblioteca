<?php session_start();

	$mysqli = new mysqli("localhost", "root", "usbw", "library");
	$mysqli->set_charset("utf-8");

	if ($mysqli -> connect_errno) {
		echo "Cuidado com a depressão mas... a conexão com o banco falhou: erro número " . $mysqli -> connect_errno;
	}
?>