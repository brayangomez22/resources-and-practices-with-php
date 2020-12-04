<?php 

// $amigo = array('telefono' => 6545647, 'edad'=>20, 'pais'=>'mexico');

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

// extract($amigo);

// $ultimo_dia = array_pop($semana);

// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }

// echo join('<br />', $semana);

// echo count($semana);

// rsort($semana);
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);

?>