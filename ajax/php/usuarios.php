<?php

header('Content-type: application/json; charset=utf-8');

$respuesta = [
	[
		'id' => '5b9c49f09b0a13367ad35ff9',
		'nombre' => 'Brayan',
		'edad' => 23,
		'pais' => 'Colombia',
		'correo' => 'correo@correo.com'
	],
	[
		'id' => '5b9c49f09b0a13367ad35ff9',
		'nombre' => 'Alexander',
		'edad' => 23,
		'pais' => 'Francia',
		'correo' => 'correo@correo.com'
	]
];

echo json_encode($respuesta);

// echo '[{"nombre": "Carlos"}, {"nombre": "Alejandro"}]';