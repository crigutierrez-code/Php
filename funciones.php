<?php
function saludar($nombre)
{
    return "Hola, $nombre!";
}

function saludo($nombre): void
{
    echo "Hola, $nombre!";
}

echo saludar(nombre: "Pepe");
echo "<br>";
saludo(nombre: "Ana");
echo "<br>";
saludo();

function sumar(...$valores): int
{

    $resl = 0;
    for ($i = 0; $i < count($valores); $i++) {
        $resl += $valores[$i];
    }
    return $resl;
}
echo "<br>";
echo sumar(1, 2, 3, 4, 5);
?>