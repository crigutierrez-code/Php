<?php
require_once __DIR__ . "/../../Controlador/MateriaControlador.php";
use Controlador\MateriaControlador;

$control = new MateriaControlador();
if ($control->borrar($_POST)) {
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Error al eliminar la materia.";
}
?>