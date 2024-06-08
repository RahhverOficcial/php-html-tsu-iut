<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha</title>
</head>
<body>

<?php
// Establecer la zona horaria
date_default_timezone_set('America/Caracas');
// Obtener la fecha y hora actual
$fechactual = date("Y-m-d H:i:s");
?>
    <h2>Fecha</h2>
    <form action="ingresafecha.php" method="post">
        <label for="fecha">Fecha: <br><input type="datetime-local" id="fecha" name="fecha" value="<?= htmlspecialchars($fechactual) ?>"></label><br><br>
        <input type="submit" name="ingresar" value="Ingresar fecha">
    </form>
</body>
</html>

