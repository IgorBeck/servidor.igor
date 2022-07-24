<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);

	print_r($dadosJsonDecodificados);

	if($_POST) {
		
	}
?>


