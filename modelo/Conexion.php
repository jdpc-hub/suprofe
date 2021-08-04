<?php
class Conexion {
    private $mySQLI;
    private $dsn;
    private $user;
    private $password;
    private $sql;
    private $result;

    public function abrir() {
        $this->dsn = 'mysql:dbname=BD_SISCASA;host=127.0.0.1';
        $this->user = 'jdpc';
        $this->password = '1234qwer';
        try {
            $pdo = new PDO($this->dsn, $this->user, $this->password);
            echo 'Conexión establecida.';
        } catch(PDOException $e) {
            echo 'Error al conectarnos: '.$e->getMessage();
        }
    }

    public function cerrar() {
        /*$this->mySQLI->close();*/
    }

    public function consulta($sql) {
        /*$this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);*/
    }
}
?>