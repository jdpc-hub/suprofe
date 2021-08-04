<?php
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case 'nosotros':
            require_once 'vista/html/nosotros.php';
            break;
        case 'registro':
            require_once 'vista/html/registro.php';
            break;
        case 'login':
            require_once 'vista/html/login.php';
            break;
        case 'politica_privacidad':
            require_once 'vista/html/politicaPrivacidad.php';
            break;
        case 'guardar_externa':
            echo 'pasaba por aquí';
            require_once 'modelo/Conexion.php';
            $conexion = new Conexion();
            $conexion->abrir();
            echo "Guardando";
            break;
    }
} elseif (isset($_POST["action"])) {
    if ($_POST["action"] == "guardar_externa") {
        require_once 'modelo/Conexion.php';
        $conexion = new Conexion();
        $conexion->abrir();
        echo "Guardando";
        //$conexion->cerrar();
    }
} else {
    require_once 'vista/html/inicio.php';
}
?>