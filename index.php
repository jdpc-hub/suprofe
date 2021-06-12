<?php
if (isset($_GET["action"])) {
    if ($_GET["action"] == "nosotros") {
        require_once 'vista/html/nosotros.php';
    } elseif ($_GET["action"] == "registro") {
        require_once 'vista/html/registro.php';
    } elseif ($_GET["action"] == "login") {
        require_once 'vista/html/login.php';
    }
} else {
    require_once 'vista/html/inicio.php';
}
?>