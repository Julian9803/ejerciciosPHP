<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>

<form method="POST">
	
<div align="center" background-color= 'yellow'>Ingrese El numero a Voltiar</div>

<input type="number" name="numero" placeholder="Ejemplo: 556">
<input type="submit">


</form>
<?php 

	if(!empty($_POST['numero'])){
		$numero = $_POST['numero'];

		if(($numero > 0) && ($numero < 9999)){


		echo "El numero ingresado es: ".$numero;
		echo "<br>";
		echo "El numero con sus cifras al reves es: ".strrev($numero);
		}else{

			echo "<script> alert('El numero ingresado deve ser menor 9999 y mayor que 0') </script>";
		}
		
	 }


?>


</body>
</html>