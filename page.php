<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
				
	if($_POST) {
		echo "Livro enviado";
		$values = $_POST;
		$dadosJsonDecodificados["Livro"][] = $values;
		$fp = fopen('db.json', 'w');
		fwrite($fp, $dadosJsonDecodificados);
		fclose($fp);
	}else {
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

