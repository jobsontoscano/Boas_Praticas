<!DOCTYPE html>
<html>
<head>
<?php include "conexao.php" ?>
	<title>Login</title>
	<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
	<form action="add.php" method="POST" id="Login">
		<label>Username: <input type="text" id="username" name="username"></label><br>
		<label>Password: <input type="password" id="pass" name="password"></label><br>
		<input type="submit" id="button" name="Enviar">
	</form><br>
	<a href="">Cadastro</a>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#Login').submit(function(e){
			e.preventDefault();
			$.ajax({
				type:"POST",
				url:"add.php",
				data:{
					username: $("#username").val(),
					password: $("#pass").val()
				}}).done(function(msg){
					$("#button").val("Conectando...");
					setTimeout(function(){
						alert('Voce acabou de logar com '+msg);
						$("#Login").css("display",'none');
					},3000)
				});
		})
	});
</script>