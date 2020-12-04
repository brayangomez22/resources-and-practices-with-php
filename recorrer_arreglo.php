<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php 

		# Mediante el ciclo foreach podemos recorrer un arreglo y ejecutar determinadas instrucciones por cada elemento del arreglo.
		# Esta es la forma mas facil de recorrer arreglos en PHP.
		foreach($meses as $mes){
			echo '<li>' . $mes . '</li>';
		}

		?>
	</ul>
</body>
</html>