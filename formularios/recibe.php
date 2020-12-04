<?php 

# Obteniendo datos mediante el metodo POST

// print_r($_POST);

// if (!$_POST) {
// 	header('Location: http://localhost/curso_php/formularios/');
// }

// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' eres ' . $sexo;


# Obteniendo datos mediante el metodo GET

// print_r($_GET);

if (!$_GET) {
	header('Location: http://localhost/curso_php/formularios/');
}


$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre){
	echo $nombre . '<br />';
} else {
	echo "El usario no establecio su nombre <br>";
}

echo $sexo . '<br />';
echo $year . '<br />';
echo $terminos . '<br />';


?>