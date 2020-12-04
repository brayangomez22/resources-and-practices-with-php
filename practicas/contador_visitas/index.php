<?php 
function contar_usuarios(){
	$archivo = 'contador.txt';

	if ( file_exists($archivo) ) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo contar_usuarios(); ?></p>
		<p class="texto">Visitas</p>
	</div>
</body>
</html>