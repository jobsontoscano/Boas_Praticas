<?php 
	$dbname = "sistema_db";
	$local = "localhost";
	$user = "root";
	$pass = "muma";

	$dsn = "mysql:dbname=$dbname;host=$local;";

	$pdo = new PDO($dsn, $user, $pass);
 ?>