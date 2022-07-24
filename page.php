<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	
	session_start();

	if($_POST) {
		print_r($dadosJsonDecodificados);
	}
?>
