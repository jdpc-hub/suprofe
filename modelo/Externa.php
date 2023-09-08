<?php
class Externa {
    private $nombre;
    private $telefono;
    private $email;
    private $pregunta;

    public function __construct($nombre, $telefono, $email, $pregunta) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->pregunta = $pregunta;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPregunta() {
        return $this->pregunta;
    }

    public function create() {
        require_once 'modelo/Conexion.php';
        $conexion = new Conexion();
        $conexion->abrir();
        $pdo = $conexion->getPdo();
        $sentencia = $pdo->prepare(
            "INSERT INTO Externas (nombre, telefono, email, pregunta) VALUES (?, ?, ?, ?)"
            );
        $sentencia->bindParam(1, $this->nombre);
        $sentencia->bindParam(2, $this->telefono);
        $sentencia->bindParam(3, $this->email);
        $sentencia->bindParam(4, $this->pregunta);
        $sentencia->execute();
        $conexion->cerrar();
    }
}
?>