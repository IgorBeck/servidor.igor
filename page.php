<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
	

		
	if($_POST) {
		echo 'Livro enviado ao servidor';
		$post = $_POST;
		$dadosJsonDecodificados["Livro"][] = $post;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	
	}

	if(isset($_GET)) {
		if ($_GET['isbm'] == null) {
			print_r($dadosJson);
			echo 'vazio';
		} else {
			echo 'cheio';
			foreach ($dadosJsonDecodificados["Livro"] as $key => $value) {
				foreach($value as $chave => $valor) {
    					if($valor == $_GET['isbm']) {
						$retorna = json_encode($value); 
						print_r($retorna);
					}
				}		
			}		
		}
		
	}

?>




