<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
	
	//----------------------------------------------------------------------//
	// enviando dados em Json pelo site
	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
		$values = $_POST;
		$dadosJsonDecodificados["Livro"][] = $values;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
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

	//----------------------------------------------------------------------//
	// enviando dados em Json pelo prompt

	if($_POST) {
		echo 'Livro enviado ao servidor';
		$post = $_POST;
		$dadosJsonDecodificados["Livro"][] = $post;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}	

	if(isset($_GET)) {
		$dados = $_GET['isbm'];
		if ($dados == null) {
			print_r($dadosJson);
			echo 'esta vazio';
		} else {
			echo 'entrou no else';
			print_r($dados);
			foreach ($dadosJsonDecodificados["Livro"] as $key => $dados) {
				echo 'primeiro foreach';
				foreach($dados as $chave => $valor) {
					echo 'segundo foreach';
    					if($valor == $isbn) {
						echo 'ultimo if';
						$retorna = json_encode($value); 
						print_r($retorna);
					}
				}
			}
		}
	}

?>




