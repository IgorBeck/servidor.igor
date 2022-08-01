<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
	$method = $_SERVER['REQUEST_METHOD'];		

	if($method === 'POST') {
		echo "Livro enviado";
		$values = file_get_contents('php://input');
		print_r($value);
		$dadosJsonDecodificados["Livro"][] = $value;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}else {
		if($method === 'GET') {
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
