<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>

<div align="center"><h2>Ingrese los Datos de los Estudiantes</h2></div>
<br>
<br>


<form method="POST" align="center">
	
	<label>Ingrese los datos del Primer Estudiante </label>	
	<br>
	<input type="number" name="edad1" placeholder="Enter your age">
	<input type="number" name="altura1" placeholder="Enter your height">	

	<br>
	<br>	
	<label>Ingrese los datos del segundo estudiante</label>
	<br>
	<input type="number" name="edad2" placeholder="Enter your age">
	<input type="number" name="altura2" placeholder="Enter your height">


	<br>
	<br>
	<label>Ingrese los datos del tercer estudiante</label>
	<br>
	<input type="number" name="edad3" placeholder="Enter your age">
	<input type="number" name="altura3" placeholder="Enter your height">


	<br>
	<br>
	<label>Ingrese los datos del cuarto estudiante</label>
	<br>
	<input type="number" name="edad4" placeholder="Enter your age">
	<input type="number" name="altura4" placeholder="Enter your height">


	<br>
	<br>
	<label>Ingrese los datos del quinto estudiante</label>
	<br>
	<input type="number" name="edad5" placeholder="Enter your age">
	<input type="number" name="altura5" placeholder="Enter your height">
	<br>
	<br>
	<input type="submit" >

</form>

<?php

	if(!empty($_POST['edad1'])){
		$edad1 = $_POST['edad1'];
		$altura1 =  $_POST['altura1'];


		$edad2 = $_POST['edad2'];
		$altura2 = $_POST['altura2'];

		$edad3 = $_POST['edad3'];
		$altura3 = $_POST['altura3'];


		$edad4 = $_POST['edad4'];
		$altura4 = $_POST['altura4'];

		$edad5 = $_POST['edad5'];		
		$altura5 = $_POST['altura5'];


		//function sumaEdades($edad1, $edad2, $edad3, $edad4, $edad5){

			$altura = $edad1 + $edad2 + $edad3 + $edad4 + $edad5;
			//return $suma;
		//}

		//function sumaAlturas($al1, $al2, $al3, $al4, $al5 ){

			$suma = $altura1 + $altura2 + $altura3 + $altura4 + $altura5;

			//return $suma;

		//}

		echo "La suma de las edadaes es: ".$suma;
		$mediaEdad = $suma / 5;
		echo "<br>";
		echo "La media de las edades: ".$mediaEdad;

		echo "<br>";
		echo "<br>";
		//$altura = function sumaEdades($altura1, $altura2, $altura3, $altura4, $altura5 );
		echo "La suma de la alturas es: ".$altura;
		$mediaAlturas = $altura / 5;
		echo "<br>";
		echo "La media de las alturas es: ".$mediaAlturas;

		$alturas = array($altura1, $altura2, $altura3, $altura4, $altura5);
		$edad = array($edad1, $edad2, $edad3, $edad4, $edad5);


		$alt = 0;

		foreach ($alturas as $item) {
			
			if($item > 175){
				@$alt += 1;
			}
		}

		$eda = 0;
		foreach ($edad as $item) {
			if($item > 18){
				$eda += 1;

			}
		}
		echo "<br>";
		echo "<br>";
		echo "El numero de alumnos que superan el 175 cm de alturas es: ";
		echo $alt;

		echo "<br>";
		echo "El numero de alumnos que ssuperan los 18 años es: ".$eda;
		
	}


?>

</body>
</html>