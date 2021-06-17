<?php
class Conexion {
    private $mySQLI;
    private $sql;
    private $result;

    public function abrir() {
        $this->mySQLI = new mysqli("localhost","jdpc","1234qwer","BD_SISCASA");
        if (mysqli_connect_errno()) {
            return 0;
        } else {
            return 1;
        }
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