<?php
class Conexion {
    private $dsn;
    private $user;
    private $password;
    private $pdo;

    public function getPdo() {
        return $this->pdo;
    }

    public function abrir() {
        $this->dsn = 'mysql:dbname=BD_SISCASA;host=127.0.0.1';
        $this->user = 'jdpc';
        $this->password = '1234qwer';
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->password);
            echo 'Conexión establecida.';
        } catch(PDOException $e) {
            echo 'Error al conectarnos: '.$e->getMessage();
        }
    }

    public function cerrar() {
        $this->pdo = null;
        echo 'Conexión cerrada.';
    }
}
?>