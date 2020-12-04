<?php 

$arreglo = array('nombre' => 'Carlos', 'apellido' => 'Esparza');

extract($arreglo);

$nombre = 'Arturo';

echo $nombre;
echo $arreglo['nombre'];

?>