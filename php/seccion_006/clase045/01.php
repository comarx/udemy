<!DOCTYPE html>
<html>
<head>
	<title>Algunas funciones de los arreglos</title>
</head>
<body>
	<h1>Algunas funciones de los arreglos</h1>
	<?php
	$familia = array('Santa', 'Marcos', 'Gabriel', 'Rebeca', 'Guadalupe');
	$amigos = array();
	$amigos[] = 'Guadalupe';
	$amigos[] = 'Fernando ';
	$amigos[] ='pequeña';
	$amigos[] = 'Flaco';

	// juntamos los arreglos, no importa si el valor se repite
	$familiaAmigos = array_merge($familia, $amigos);

	foreach ($familiaAmigos as $i => $item) {
		echo $i.'.- '.$item.'<br>';
	}

	// agregamos otro elemento al final del arreglo familia
	array_push($familia, 'Pablo', 'Enrique');

	$familiaAmigos2 = array_merge($familia, $amigos);
	echo '<br>';
	foreach ($familiaAmigos2 as $i => $item) {
		echo $i.'.- '.$item.'<br>';
	}
	?>

</body>
</html>