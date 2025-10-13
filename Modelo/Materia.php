<?php
namespace Modelo;

require_once __DIR__ . "/Conexion.php";

use Modelo\Conexion;
use mysqli;

class Materia
{
    private $id;
    private $nombre;
    private $descripcion;
    private $con;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->con = $conexion->getConexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function all()
    {
        $sql = "SELECT * FROM materias";
        $result = $this->con->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM materias WHERE id = $id";
        $result = $this->con->query($sql);
        return $result->fetch_assoc();
    }

    public function save()
    {
        $sql = "INSERT INTO materias (nombre, descripcion) VALUES ('$this->nombre', '$this->descripcion')";
        return $this->con->query($sql);
    }

    public function update()
    {
        $sql = "UPDATE materias SET nombre='$this->nombre', descripcion='$this->descripcion' WHERE id=$this->id";
        return $this->con->query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM materias WHERE id=$this->id";
        return $this->con->query($sql);
    }
}
?>