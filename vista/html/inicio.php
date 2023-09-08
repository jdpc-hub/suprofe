<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/style.css">
    <title>Suprofe.com</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img src="vista/images/logo.jpg" alt="Logo de suprofe.com" width="100" height="100">
        </a>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="index.php?action=nosotros">Nosotros</a>
            <a href="https://wa.me/573053070002?text=Me%20gustar%C3%ADa%20tener%20m%C3%A1s%20informaci%C3%B3n" target="_blank">Contáctanos</a>
            <a href="index.php?action=registro">Regístrate</a>
            <a href="index.php?action=login">Iniciar sesión</a>
        </nav>
    </header>
    <main>
        <section id="section">
            <h1>Profesores de matemáticas, física y más</h1>
            <p>Encuentra tu profe hoy mismo y reserva tu clase, ya sea presencial (con todos los protocolos de bioseguridad) o de manera virtual desde la comodidad de tu casa.</p>
        </section>
        <section id="section">
            <h1>Encuentra a tu profe o haz una pregunta</h1>
            <p>Déjanos tus datos, nosotros te contactamos. O <a href="index.php?action=registro">regístrate</a> para que puedas elegirlo tú mismo.</p>
            <form id="form_externas" action="index.php?action=guardar_externa" method="post">
                <label for="nombre">
                    <span>Nombre:</span>
                    <br>
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
                </label>
                <br>
                <label for="telefono">
                    <span>Teléfono:</span>
                    <br>
                    <input type="tel" name="telefono" placeholder="Ingresa tu número telefónico" required>
                </label>
                <br>
                <label for="email">
                    <span>Email:</span>
                    <br>
                    <input type="email" name="email" placeholder="Ingresa tu email" required>
                </label>
                <br>
                <label for="pregunta">
                    <span>Escribe tu pregunta:</span>
                    <br>
                    <textarea name="pregunta" name="pregunta" cols="100" rows="10" placeholder="Pregúntanos algo"></textarea>
                </label>
                <br>
                <!-- <label for="archivo">
                    <span>Adjunta un documento:</span>
                    <br>
                    <input type="file" id="archivo">
                </label>
                <br>
                <label for="materia">
                    <span>Materia:</span>
                    <br>
                    <input type="text" id="materia" placeholder="Ej: Matemáticas, Física, Geometría, etc.">
                </label> -->
                <br>
                <label for="datos">
                    <input type="checkbox" name="datos" required>
                    <span>Acepto la <a href="./politicaPrivacidad.html">política de tratamiento de datos</a>.</span>
                </label>
                <br>
                <input type="submit" value="Solicitar">
            </form>
        </section>
    </main>
    <footer>
        <span>Copyright © Suprofe.com. Derechos reservados. <a href="index.php?action=politica_privacidad">Política de privacidad.</a></span>
    </footer>
</body>
</html>