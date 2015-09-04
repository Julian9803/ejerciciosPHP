<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>

<form align="center" method="POST">
	
	<h3>Ingrese el kilometraje de su Auto</h3>
	<fieldset>
	<legend>Datos</legend>
		
		<input type="number" name="numero" placeholder="Ingrese los Kilometros" required>
		<br>
		<input type="submit">

	</fieldset>

</form>

<div align="center">

<?php 

	if(!empty($_POST['numero'])){


		$km = $_POST['numero'];

		$total = $km * 16.4;

		$resultado = number_format($total,0,".","");
		echo "<br>";
		echo "El auto consume en total: ".$resultado;


	}

 ?>

</div>
</body>
</html>