<?php 
	include 'conexao.php';
	$username = $_POST['username'];
	$pass = $_POST['password'];

	$smtp = $pdo->query("SELECT * FROM users WHERE username = '$username' AND password = '$pass'");
	$result = $smtp->fetchAll();
	if (count($result) > 0) {
		echo "Sucesso";
	}else{
		echo "Falha";
	}

 ?>