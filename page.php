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

	if($_POST) {
		echo 'deu certo pelo post';
		$post = $_POST;
		$dados_post = json_encode($post, true);
		$dadosJsonDecodificados["Livro"][] = $dados_post;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}	

	if($_GET) {
		print_r($dadosJson);
		echo 'deu certo pelo get';
	}
	
	

	if(isset($_POST['PesquisarLivro'])) {
		$isbn = $_POST['isbn'];
		foreach ($dadosJsonDecodificados["Livro"] as $key => $value) {
			foreach($value as $chave => $valor) {
    				if($valor == $isbn) {
					$retorna = json_encode($value); 
					print_r($retorna);
				}
			}		
		}
    	}	
?>




