<?php
if (isset($_GET["action"])) {
    if ($_GET["action"] == "nosotros") {
        require_once 'vista/html/nosotros.php';
    } elseif ($_GET["action"] == "registro") {
        require_once 'vista/html/registro.php';
    } elseif ($_GET["action"] == "login") {
        require_once 'vista/html/login.php';
    } elseif ($_GET["action"] == "politica_privacidad") {
        require_once 'vista/html/politicaPrivacidad.php';
    }
} elseif (isset($_POST["action"])) {
    if ($_POST["action"] == "guardarExterna") {
        echo "Guardando";
    }
} else {
    require_once 'vista/html/inicio.php';
}
?>