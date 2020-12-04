<?php

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;