<?php

// if (condicion){
// 	// Instrucciones
// }

/* Operadores de comparacion:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores de logicos:

&& - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y solo una conidicion

*/

$edad = 16;
?>

<?php if($edad >= 18){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Bienvenido!</h1>
	</body>
	</html>
<?php } ?>

<?php if($edad < 18){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Eres menor de edad!</h1>
		<p>No puedes visitar este sito</p>
	</body>
	</html>
<?php } ?>