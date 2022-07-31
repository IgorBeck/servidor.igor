<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
	

		
	if($_POST) {
		echo 'Livro enviado ao servidor';
		$post = $_POST;
		json_encode($post);
		print_r($post);
		$dadosJsonDecodificados["Livro"][] = $post;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	
	} else {
		if(isset($_GET)) {
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
	}

?>




