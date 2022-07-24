<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	if($_POST['nomeAutor'] == NULL ) {
		print_r($dadosJsonDecodificados);
	} else {
		$json = file_get_contents('php//input');
		$data = json_decode($json);
		print_r($data);
	}
?>
