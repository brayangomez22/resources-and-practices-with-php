<?php

class Persona {
	public static $dia = '7 de Septiembre';

	public static function saludo($nombre = null){
		if($nombre){
			return 'Hola, buen dia ' . $nombre;
		} else {
			return 'Hola, buen dia.';
		}
	}
}

$carlos = new Persona;
echo $carlos->saludo('Carlos');

// echo Persona::saludo('Carlos');