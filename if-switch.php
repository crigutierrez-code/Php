<?php
$edad = 20;

if ($edad < 18) {
    echo "Menor de edad";
} elseif ($edad >= 18 && $edad < 65) {
    echo "Adulto";
} else {
    echo "Persona mayor";
}


$categoria = 'a';
switch ($categoria) {
    case 'a':
        echo "Categoría A";
        break;
    case 'b':
        echo "Categoría B";
        break;
    case 'c':
        echo "Categoría C";
        break;
    default:
        echo "Categoría desconocida";
        break;
}


?>