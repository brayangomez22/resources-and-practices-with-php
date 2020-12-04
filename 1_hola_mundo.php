<?php 

// Variable
$nombre = 'Carlos Arturo';

// Mostramos en pantalla mediante echo
echo 'Hola Mundo, mi nombre es: ' . $nombre ;

// phpinfo();

?>

<!-- Parte II -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina web de Carlos</title>
</head>
<body>
	<h1>Pagina web de Carlos</h1>
	<h3><?php echo 'Hola ' . $nombre ?></h3>
</body>
</html>