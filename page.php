<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
				
	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
		$values = $_POST;
		$dadosJsonDecodificados["Livro"][] = $values;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}

	if(isset($_POST['MostrarTudo'])) {
		print_r($dadosJson);	
	}
	
	if(isset($_POST['PesquisarLivro'])) {
		$isbn = $_POST['isbn'];
		foreach ($dadosJsonDecodificados as $key => $value) {
    			if($value == $isbn) {
        			$msg = 'Encontrado na lista!';	
				print_r($msg);
			}
			echo "ola mundo";
		}
    	}	
?>



