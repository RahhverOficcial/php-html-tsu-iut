<?php
if($_POST){
$nombre=$_POST['Nombre'];

$apellido=$_POST['apellido'];

echo "hola ".$nombre." ".$apellido;

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
	<form action="1.php" method="post" >
		nombre
		<input type="text" name="Nombre" id="">
		<br/>

		apellido
		<input type="text" name="apellido" id="">
		<br/>

		<input type="submit" value="presiona">
		
		<
		</form>	

</body>
</html>