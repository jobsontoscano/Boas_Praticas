<!DOCTYPE html>
<html>
<head>
	<title>Jquery+php+html = ajax</title>
<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<form method="POST" action="" id="Form-login">
		<input type="text" name="name" placeholder="Digite seu Name" id="name">
		<input type="password" name="senha" placeholder="Digite sua  senha" id="senha">
		<input type="submit" name="enviar" value="Logar">
</form>
<script>
	$(document).ready(function(){
		$("#Form-login").submit(function(e){

		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "add.php",
			data:{
				name: $("#name").val(),
				senha: $('#senha').val()
			}}).done(function(msg){
				alert("Data Saved: " + msg );
			});
		});
	});
</script>
</body>
</html>