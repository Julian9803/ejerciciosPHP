<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>

<fieldset><legend><h2>Verificar Si Un Numero es Copicuo</h2></legend>

<label><h4>Digite Un Numero Por Favor</h4></label>

<form method="POST" >
	
<input type="number" name="numero" placeholder="Escriba el Numero" required>
<input type="submit">


</form>



</fieldset>


<?php 
	
	if(!empty($_POST['numero'])){

		 $numero  = $_POST['numero'];

		 $copicuo = strrev($numero);


		 if($numero == $copicuo){

		echo "<script> alert('El numero ingresado es copicuo')</script>";

		}else{
			echo "<script> alert('No es Copicuo el numero digitado')</script>";
		}


	}



 ?>

</body>
</html>