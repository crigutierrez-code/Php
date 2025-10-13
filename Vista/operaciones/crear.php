<?php
require_once __DIR__ . "/../../Controlador/MateriaControlador.php";
use Controlador\MateriaControlador;

$control = new MateriaControlador();
if ($control->crear($_POST)) {
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Error al crear la materia.";
}
?>