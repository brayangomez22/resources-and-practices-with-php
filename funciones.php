<?php 

function saludo($nombre){
	return 'Saludo, ' . $nombre;
}

echo saludo('Cesar') . '<br />';
echo saludo('Alejandro') . '<br />';
echo saludo('Manuel') . '<br />';

// function sumar($numero1, $numero2){
// 	$resultado = $numero1 + $numero2;
// 	return $resultado;
// }

// $resultado = sumar(10, 15);

?>