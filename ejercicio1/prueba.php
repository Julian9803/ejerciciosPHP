<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>

<form method="POST">
	
	<div >Ingrese Su Numero de Dias</div>
	<br>

	<input type="number" name="dias" placeholder="Ejemplo 123">
	<input type="submit" value="Pulse para Enviar">

</form>
<?php 
		
		if(!empty($_POST['dias'])){

		$numeroD = $_POST['dias'];
		$kmDia = 8765812 * 24;
		$resultado = $numeroD * $kmDia;
		echo "La velocidad es:  ".$resultado;
	}


 ?>

</body>
</html>