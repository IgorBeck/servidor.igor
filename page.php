<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);

	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
	}
	if(isset($_POST['MostrarTudo'])) {
		print_r($dadosJson);	
	}
?>


