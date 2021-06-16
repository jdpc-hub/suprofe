<?php
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    switch ($action) {
        case "nosotros":
            require_once 'vista/html/nosotros.php';
            break;
        case "registro":
            require_once 'vista/html/registro.php';
            break;
        case "login":
            require_once 'vista/html/login.php';
            break;
        case "politica_privacidad":
            require_once 'vista/html/politicaPrivacidad.php';
            break;
    }
} elseif (isset($_POST["action"])) {
    if ($_POST["action"] == "guardarExterna") {
        echo "Guardando";
    }
} else {
    require_once 'vista/html/inicio.php';
}
?>