<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/style.css">
    <title>Log in</title>
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
            <h1>Inicia sesión</h1>
            <p>Inicia sesión para disfrutar de todos nuestros servicios.</p>
            <form action="./homeUsuario.html">
                <label for="usuario">
                    <span>Usuario:</span>
                    <br>
                    <input type="text" id="usuario" placeholder="Ingresa tu usuario" required>
                </label>
                <br>
                <label for="clave">
                    <span>Clave:</span>
                    <br>
                    <input type="password" id="clave">
                </label>
                <input type="submit" value="Entrar">
            </form>
        </section>
    </main>
    <footer>
        <span>Copyright © Suprofe.com. Derechos reservados. <a href="index.php?action=politica_privacidad">Política de privacidad.</a></span>
    </footer>
</body>
</html>