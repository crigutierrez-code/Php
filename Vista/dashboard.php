<?php
require_once __DIR__ . "/../Controlador/MateriaControlador.php";

use Controlador\MateriaControlador;

$control = new MateriaControlador();
$materias = $control->listar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Materias</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>

<body>
    <h1>Lista de Materias</h1>
    <a href="materia-form.php">Agregar nueva materia</a>
    <section class="cards">
        <?php foreach ($materias as $mat): ?>
            <div class="card">
                <p><b>ID:</b> <?= $mat['id'] ?></p>
                <p><b>Nombre:</b> <?= $mat['nombre'] ?></p>
                <p><b>Descripción:</b> <?= $mat['descripcion'] ?></p>
                <a href="materia-form.php?id=<?= $mat['id'] ?>">Editar</a>
                <form action="operaciones/borrar.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $mat['id'] ?>">
                    <form action="operaciones/borrar.php" method="post" onsubmit="return confirmarEliminacion(this)">
                        <input type="hidden" name="id" value="<?= $mat['id'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>

                </form>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>