<?php 

# Los arreglos asosiativos nos permiten acceder a sus valore de una forma mas explicita.

$alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' => 'mexico');

# Al igual que en los arreglos indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
$alex['telefono'] = '111111';

echo 'El telefono de Alex es: ' . $alex['telefono'];

?>