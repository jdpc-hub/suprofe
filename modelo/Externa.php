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
}
?>