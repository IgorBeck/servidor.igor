<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	print_r($dadosJson);
	print_r($dadosJsonDecodificados);
		
	
?>



