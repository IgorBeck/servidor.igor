<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	
	session_start();

	if($_POST['LivroEspecifico'] == '') {
		print_r($dadosJsonDecodificados);
	}
?>
