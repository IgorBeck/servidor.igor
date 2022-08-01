<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
				
	if(isset($_POST)) {
		echo "Livro enviado";
		$values = $_POST;
		print_r($values);
		$dadosJsonDecodificados["Livro"][] = $values;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}	
?>

