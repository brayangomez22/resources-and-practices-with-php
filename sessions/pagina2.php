<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo 'No has iniciado sesion';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
</head>
<body>
	<a href="cerrar.php">Cerrar Sesion</a>
</body>
</html>