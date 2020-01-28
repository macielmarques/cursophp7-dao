<?php
	require_once("config.php");
	$root = new usuario();
	$root->loadbyId(9);
	echo $root;

	/*$sql = new Sql();
	$usuario = $sql->select("SELECT * FROM tb_usuario");
	echo json_encode($usuario);*/
	
?>