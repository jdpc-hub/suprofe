<?php
class Conexion {
    private $mySQLI;
    private $dsn;
    private $user;
    private $password;
    private $sql;
    private $result;

    public function abrir() {
        try {
            $this->dsn = 'mysql:dbname=BD_SISCASA;host=127.0.0.1';
            $this->user = 'jdpc';
            $this->password = '1234qwer';
            $pdo = new PDO($this->dsn, $this->user, $this->password);
            echo 'Conexión establecida.';
        } catch(PDOException $e) {
            echo 'Error al conectarnos: ' . $e->getMessage();
        }
        /*
        $this->mySQLI = new mysqli("localhost","jdpc","1234qwer","BD_SISCASA");
        if (mysqli_connect_error()) {
            echo 'Conexión fallida';
            return 0;
        } else {
            echo 'Conexión exitosa';
            return 1;
        }*/
    }

    public function cerrar() {
        $this->mySQLI->close();
    }

    public function consulta($sql) {
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
    }
}
?>