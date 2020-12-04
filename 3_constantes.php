<?php 

// Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor
define('PI', 3.14);
define('NOMBRE', 'Carlos');
define('NOMBRE', 'Arturo');


echo NOMBRE;


// En las variables si podemos cambiar el valor que se le asigno.

$nombre = "Carlos";
echo $nombre; // Mostraria Carlos en pantalla

$nombre = "Arturo";
echo $nombre; // Mostraria Arturo en pantalla

?>