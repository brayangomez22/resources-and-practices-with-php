<?php

class Persona {
	public $nombre;
	public $edad;
	public $pais;

	function __construct($nombre, $edad, $pais){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;
	}

	public function mostrarInformacion(){
		return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
	}
}

class Estudiante extends Persona {
	function __construct($nombre, $edad, $pais, $carrera){
		parent::__construct($nombre, $edad, $pais);
		$this->carrera = $carrera;
	}
}

class Trabajador extends Persona {
	function __construct($nombre, $edad, $pais, $trabajo){
		parent::__construct($nombre, $edad, $pais);
		$this->trabajo = $trabajo;
	}
}

$carlos = new Trabajador('Carlos Arturo', 23, 'Mexico', 'Profesor');
echo $carlos->trabajo;

// class Estudiante {
// 	public $nombre;
// 	public $edad;
// 	public $pais;
// 	public $carrera;

// 	function __construct($nombre, $edad, $pais, $carrera){
// 		$this->nombre = $nombre;
// 		$this->edad = $edad;
// 		$this->pais = $pais;
// 		$this->carrera = $carrera;
// 	}

// 	public function mostrarInformacion(){
// 		return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
// 	}
// }