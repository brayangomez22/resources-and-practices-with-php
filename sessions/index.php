<?php
session_start();
// session_destroy();

$_SESSION['nombre'] = 'Carlos';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	<h1>Pagina de Inicio</h1>
	<p>Has cargado una nueva sesion</p>
	<a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>