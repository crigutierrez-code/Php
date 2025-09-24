<?php
// Array de 9 números
$numeros = [3, 7, 1, 9, 4, 8, 2, 6, 5];

// Ciclo for
echo "Ciclo for:<br>";
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}

echo "<br>Ciclo foreach:<br>";
// Ciclo foreach
foreach ($numeros as $valor) {
    echo $valor . "<br>";
    break; // Rompe el ciclo después de la primera iteración
    if ($index == $valor) {
        continue; // Salta a la siguiente iteración si el índice es igual al valor
    }
}

foreach ($numeros as $index => $valor) {
    echo "$index: $valor <br>";
}

echo "<br>Ciclo while:<br>";
// Ciclo while
$i = 0;
while ($i < count($numeros)) {
    echo $numeros[$i] . "<br>";
    $i++;
}

// Ciclo do-while
echo "<br>Ciclo do-while:<br>";
$i = 0;
while ($i < count($numeros)) {
    echo $numeros[$i] . "<br>";
    $i++;
}

?>