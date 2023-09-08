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
            require_once 'modelo/Externa.php';
            $externa = new Externa($_POST['nombre'],$_POST['telefono'],$_POST['email'],$_POST['pregunta']);
            $externa->create();
            break;
    }
}
else {
    require_once 'vista/html/inicio.php';
}
?>