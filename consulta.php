<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<form action="consulta.php" method="POST">
			<label>nombre</label>
			<br>
			<input type="text" name="nombre" placeholder="nombre" required>
			<br>
			<label > correo electronico</label>
			<br>
			<input type="email" name="email" placeholder="eje@example" required>
			<input type="submit" name="enviar" value="Enviar">
		</form>
</body>
</html>

<?php
   if (isset($_POST['enviar'])) {
   	$destino='mino.zalles0002@gmail.com';
   	$nombre=$_POST['nombre'];
   	$email=$_POST['email'];
   	mail($email, 'consulta', "hola we shupa");
   	}