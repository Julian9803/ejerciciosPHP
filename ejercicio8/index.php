<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>

<div align="center" background-color="yellow">
	
	<fieldset>
		
		<legend><h2>Convertidor de De Millas</h2></legend>

		<label><h4>Ingrese Por Favor el Numero de Milla a Convertir</h4></label>
		<br>
		<br>
		<form method="post">
			<input type="number" name="numero" placeholder="Ejemplo: 1245" requerid>
			<br>
			<input type="Submit">

		</form>


	</fieldset>


</div>

<?php  

	if(!empty($_POST['numero'])){

		$milla = $_POST['numero'];

		echo "Una Milla en Kilometro equivale: ".$milla / 0.6214;
		echo "<br>";
		echo "Una Milla en Yardas equivale a: ".$milla / 1760;
		echo "<br>";
		echo "Una Milla en pies equivale a: ".$milla *3;
		echo "<br>";
		echo "Una milla en pulgadas equivale a: ".$milla * 36;
	}

?>


</body>
</html>