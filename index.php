<?php
	require_once("config.php");
	$sql = new Sql();
	$usuario = $sql->select("SELECT * FROM tb_usuario");
	echo json_encode($usuario);
?>