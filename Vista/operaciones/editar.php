<?php
require_once __DIR__ . "/../../Controlador/MateriaControlador.php";
use Controlador\MateriaControlador;

$control = new MateriaControlador();
if ($control->editar($_POST)) {
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Error al actualizar la materia.";
}
?>