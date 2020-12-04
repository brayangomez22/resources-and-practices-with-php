<?php

// Comprobando si los datos se envian por el metodo POST
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	echo "Se enviaron por POST";
// }

$errores = '';
$enviado = '';

// Comprobamos que el formulario haya sido enviado.
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

// Comprobamos que el nombre no este vacio.
	if (!empty($nombre)) {

		// Saneamos el nombre para eliminar caracteres que no deberian estar.
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($nombre == "") {
			$errores .= 'Por favor ingresa un nombre.<br />';
		}

	}else {
		$errores.= 'Por favor ingresa un nombre.<br />';
	}

	if (!empty($correo)) {

		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		// Comprobamos que sea un correo valido
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores.= "Por favor ingresa un correo valido.<br />";
		}

	}else {
		$errores.= 'Por favor ingresa un correo.<br />';
	}


	if (!empty($mensaje)) {

		// Podemos sanear la cadena de texto con filter_var, pero queremos que en el mensaje los signos se conviertan en entidades HTML
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);

	}else {
		$errores.= 'Por favor ingresa el mensaje.<br />';
	}

// Comprobamos si hay errores, si no hay entonces enviamos.
	if (!$errores) {
		$enviar_a = 'gomezmancobrayanalexander@gmail.com';
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= 'Mensaje: ' . $mensaje;

		// mail($enviar_a, $asunto, $mensaje);
		$enviado = 'true';
	}
}

require 'index.view.php';

?>