<?php 

require 'funciones.php';

$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('curso_php', 'root', '');

if (!$conexion) {
	// Terminamos con la ejecucion de la pagina si no pudimos conectar.
	// Normalmente lo que hariamos es redirigir a una pagina de error.
	die();
}

// Traemos las fotos de la base de datos
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM galeria LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();

// Si no hay fotos entonces redirigimos a una pagina de error
# Tambien puede ser que no haya fotos porque el usuario intento acceder a una foto modificando la URL
if (!$fotos) {
	header('Location: index.php');
}

// Ejecutamos otra consulta para conocer el numero de paginas que tendremos
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ($total_post / $fotos_por_pagina);
$total_paginas = ceil($total_paginas);

require 'views/index.view.php';

?>