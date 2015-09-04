<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>

<form align="center" method="POST">
	<br>
	<label><h3>Por Favor Ingrese El Valor De La Laptop</h3></label>	
	<br>
	<input type="number" name="valor" placeholder="Ingresa El Valor" required>
	<br>
	<input type="submit">


</form>
<div align="center">
<?php 
	
	if(!empty($_POST['valor'])){
		$total = 0;
		$valor = $_POST['valor'];
		$impuest = $valor;

		$impuest = ($impuest * 5) / 100;
		$valor += 330;

		$valor += $impuest;
		$total = $valor;
		echo "El valor total a pagar por la laptop es: ".$total;

		$vector = array();
		array_push($vector, $total);
		echo "<br>";
		echo "<br>";
		foreach ($vector as $item) {
			echo "<br>";
			echo "El valor agregado es: ".$item;
		}
	}


 ?>
</div>

</body>
</html>