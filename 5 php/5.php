<?php
if ($_POST){

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

if ( ($valorA != $valorB) && ($valorA > $valorB) ) {

	echo " valor A es mayor a valor B y es diferente al de b";
}
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operadores relacionales</title>
</head>
<body>
	<form action="5.php" method="post">
		Valor A
		<input type="text" name="valorA" id="">
		<br/>
		Valor B
		<input type="text" name="valorB" id="">
		<br/>
		<input type="submit" value=calcular>
		
	</form>

</body>
</html>