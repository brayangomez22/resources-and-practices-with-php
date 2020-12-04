<?php

abstract class Persona {
	public function saludo(){
		return 'Hola!';
	}
}

class Estudiante extends Persona {

}

$carlos = new Estudiante;
echo $carlos->saludo();