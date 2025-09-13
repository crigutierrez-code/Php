<?php
// ============================
// VARIABLES ESCALARES
// ============================

// Entero (integer)
$entero = 10; // Número sin decimales
echo "Entero: $entero <br>";

// Flotante (float o double)
$flotante = 3.14; // Número con decimales
echo "Flotante: $flotante <br>";

// Cadena de texto (string)
$cadena = "Hola, mundo"; // Texto
echo "Cadena: $cadena <br>";

// Booleano (true o false)
$booleano = true; // Verdadero o falso
echo "Booleano: " . ($booleano ? "true" : "false") . "<br>";


// ============================
// VARIABLES COMPUESTAS
// ============================

// Array indexado (se accede por índices numéricos)
$array = [1, 2, 3];
echo "Array indexado: " . implode(", ", $array) . "<br>";

// Array asociativo (se accede por claves)
$asociativo = ["a" => 1, "b" => 2];
echo "Array asociativo: a = {$asociativo['a']}, b = {$asociativo['b']} <br>";

// Objeto (instancia de una clase anónima)
$objeto = (object) ['x' => 1, 'y' => 2];
echo "Objeto: x = {$objeto->x}, y = {$objeto->y} <br>";


// ============================
// VARIABLES ESPECIALES
// ============================

// NULL (ausencia de valor)
$nulo = null;
echo "Nulo: " . var_export($nulo, true) . "<br>";

// Resource (un recurso externo, como un archivo o conexión a BD)
$recurso = fopen(__FILE__, "r"); // Abrimos este mismo archivo en modo lectura
echo "Recurso: " . get_resource_type($recurso) . "<br>";
fclose($recurso); // Siempre cerrar el recurso

// ============================
// EXTRA: VAR_DUMP PARA VER TIPO Y VALOR
// ============================
echo "<h3>Detalle con var_dump:</h3>";
var_dump($entero, $flotante, $cadena, $booleano, $array, $asociativo, $objeto, $nulo);
