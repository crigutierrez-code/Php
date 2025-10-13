<?php
namespace Modelo;

use mysqli;
use Exception;

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "materias_db";
    private $con;

    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->con->connect_error) {
            throw new Exception("Error de conexión: " . $this->con->connect_error);
        }
    }

    public function getConexion()
    {
        return $this->con;
    }
}
?>