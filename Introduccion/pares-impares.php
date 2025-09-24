<?php
$numeros = $_POST['numtext'];

$mod = $numeros % 2;
if ($mod == 0) {
    echo "El número $numeros es par";
} else {
    echo "El número $numeros es impar";
}
echo '<br><a href="forms.html"><button>Regresar</button></a>';
?>