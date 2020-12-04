<?php

// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Rregresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

// <	=	 >
// 1 	0 	-1

// echo 10 <=> 1;
// echo '<br />';
// echo 10 <=> 10;
// echo '<br />';
// echo 1 <=> 10;


$arreglo = [3,1,5,2,4];
sort($arreglo);

// function comparar($a, $b){
// 	if($a == $b){
// 		return 0;
// 	} elseif($a > $b){
// 		return 1;
// 	} else {
// 		return -1;
// 	}
// }

function comparar($a, $b){
	return $a <=> $b;
}
usort($arreglo, 'comparar');

echo implode(' - ', $arreglo);