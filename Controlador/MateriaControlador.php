<?php
namespace Controlador;

require_once __DIR__ . "/../Modelo/Materia.php";

use Modelo\Materia;

class MateriaControlador
{

    public function listar()
    {
        $materia = new Materia();
        return $materia->all();
    }

    public function crear($data)
    {
        if (empty($data['nombre']) || empty($data['descripcion'])) {
            return false;
        }
        $materia = new Materia();
        $materia->set('nombre', $data['nombre']);
        $materia->set('descripcion', $data['descripcion']);
        return $materia->save();
    }

    public function editar($data)
    {
        if (empty($data['id']) || empty($data['nombre']) || empty($data['descripcion'])) {
            return false;
        }
        $materia = new Materia();
        $materia->set('id', $data['id']);
        $materia->set('nombre', $data['nombre']);
        $materia->set('descripcion', $data['descripcion']);
        return $materia->update();
    }

    public function borrar($data)
    {
        if (empty($data['id'])) {
            return false;
        }
        $materia = new Materia();
        $materia->set('id', $data['id']);
        return $materia->delete();
    }

    public function buscar($id)
    {
        $materia = new Materia();
        return $materia->find($id);
    }
}
?>