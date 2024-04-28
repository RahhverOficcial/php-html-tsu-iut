<?php 
if ($_POST) {
	$valorA=$_POST['valorA'];
	$valorB=$_POST['valorB'];

	// suma

	$suma= $valorA+$valorB;

	// resta

	$resta= $valorA-$valorB;

	// division
	$division= $valorA/$valorB;

	//multiplicacion
	$multiplicacion= $valorA*$valorB;

	echo "<br/>".$suma;
	echo "<br/>".$resta;
	echo "<br/>".$division;
	echo "<br/>".$multiplicacion;

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operadores aritmeticos</title>
</head>
<body>
<form action="3.php" method="post" >
	Valor A
	<input type="text" name="valorA">
	<br/>
	Valor b
	<input type="text" name="valorB">
	<br/>
	<input type="submit" value=calcular>

	
</form>	

</body>
</html>