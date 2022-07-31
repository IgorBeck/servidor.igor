<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
	

		
	if($_POST) {
		$post = $_POST;
		$dadosJsonDecodificados["Livro"][] = $post;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
		echo 'Livro enviado ao servidor ';
		print_r($post);
	
	} else {
		
			if ($_GET['isbn'] == null) {
				print_r($dadosJson);
			} else {
				foreach ($dadosJsonDecodificados["Livro"] as $key => $value) {
					foreach($value as $chave => $valor) {
    						if($valor == $_GET['isbn']) {
							$retorna = json_encode($value); 
							print_r($retorna);
						}
					}		
				}		
			}
		
		
	}

?>




