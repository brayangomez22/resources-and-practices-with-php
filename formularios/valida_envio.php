<?php 

# Con $_SERVER['REQUEST_METHOD'] podemos comprobar si los datos han sido enviados por POST o por GET.

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	echo "Se enviaron por POST";
// } else {
// 	echo "Se enviaron por GET";
// }


# Tambien podemos comprobar que formulario ha enviado los datos.

if (isset($_POST['submit'])) {
	echo "Se han enviado los datos correctamente";
	print_r($_POST['submit']);
}

?>