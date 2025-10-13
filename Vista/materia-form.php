<?php
require_once __DIR__ . "/../Controlador/MateriaControlador.php";
use Controlador\MateriaControlador;

$control = new MateriaControlador();
$id = $_GET['id'] ?? null;
$materia = $id ? $control->buscar($id) : null;

$action = $id ? "operaciones/editar.php" : "operaciones/crear.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?= $id ? "Editar" : "Crear" ?> Materia</title>
</head>

<body>
    <h1><?= $id ? "Editar" : "Crear" ?> Materia</h1>
    <a href="dashboard.php">Volver</a>
    <form action="<?= $action ?>" method="post">
        <?php if ($id): ?>
            <input type="hidden" name="id" value="<?= $materia['id'] ?>">
        <?php endif; ?>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= $materia['nombre'] ?? '' ?>" required>
        </div>
        <div>
            <label>Descripción:</label>
            <textarea name="descripcion" required><?= $materia['descripcion'] ?? '' ?></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>