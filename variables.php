<?php 

# Notas:
# - Los nombres de las variables son sensibles a mayusculas y minisculas
# - Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ñ

# Tipos de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

# Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = "Carlos Arturo";

// Entero
$numero = 7;

// Boleano
$verdadero_falso = true;


// Comillas Sencillas vs Comillas Dobles
# En las comillas dobles podemos llamar variables, mientras que en las sencillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.

echo 'Mi nombre es ' . $nombre;
echo '<br>';

echo "Mi nombre es $nombre";

// Podemos obtener el tipo de dato de una variable mediante la funcion gettype()

?>