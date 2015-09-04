<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 12</title>
</head>
<body>

<div align="center"><h2>Adiviname el Nuemro?</h2></div>
<br>
<br>
<form align="center" method="POST">
	<input type="number" name="numero" placeholder="Digita El Numero">
	<input type="submit">


</form>

<?php 

	if(!empty($_POST['numero'])){

		$numero = $_POST['numero'];
		$compa = 1234;
		echo "Voy a entrar";
		echo "<br>";
		if($numero > $compa){
			echo "Estoy adentro";
			echo "<script>alert('Restale Al Numero....')</script>";
		}
		if ($numero < $compa) {
			echo "Estoy adentro";
			echo "<script> alert('Sumale Al Numero')</script>";
		}
		if ($numero == $compa) {
			echo "Estoy adentro";
			echo "<script> alert('Enhorabuena El Numero Es Igual¡¡¡¡')</script>";
		}


	}


 ?>

</body>
</html>