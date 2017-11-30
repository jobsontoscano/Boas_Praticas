<?php 
	
	if (isset($_POST['name']) && isset($_POST['senha'])) {
			
			echo "\n Dados Name: ". $_POST['name'] . "\n" . "Dados da Senha: " . $_POST['senha'];

	}else{	
		echo "Não recebemos nenhun dados";
	}

 ?>