<!DOCTYPE html>
<html>
<head>
	<title>Arreglos</title>
	<meta charset="utf-8">
</head>
<body>
<h1>array (arreglos)</h1>
<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'); 
$dias = array();
$dias[] = 'Lunes';
$dias[] = 'Martes';
$dias[] = 'Miércoles';
$dias[] = 'Jueves';
$dias[] = 'Viernes';
$dias[] = 'Sábado';
$dias[] = 'Domingo';

echo "Hoy es 30 de ".$meses[3]." del día ".$dias[2];
echo "<br>El tamaño del arreglo de dias es: ".count($dias);

?>

</body>
</html>