<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Consulta de disponibilidad de profesores</title>
</head>
<body>
    <header>
        <a href="./inicio.html">
            <img src="../images/logo.jpg" alt="Logo de suprofe.com" width="100" height="100">
        </a>
        <nav>
            <a href="./homeUsuario.html">Home</a>
            <a href="https://wa.me/573053070002?text=Me%20gustar%C3%ADa%20tener%20m%C3%A1s%20informaci%C3%B3n"  target="_blank">Contáctanos</a>
            <a href="./login.html">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <section id="section">
            <h1>Consulta la disponibilidad de un profesor</h1>
            <p>Elije un tema de asesoría, un profesor y el rango de fechas en que podrías recibir tu asesoría.</p>
            <form action="./dispProfesor.html">
                <label for="materia">
                    <span>Tema de la asesoría:</span>
                    <select name="materia" id="materia">
                        <option value="1">Física</option>
                        <option value="2">Matemáticas</option>
                        <option value="3">Química</option>
                    </select>
                </label>
                <label for="profesor">
                    <span>Profesor:</span>
                    <select name="profesor" id="profesor">
                        <option value="1">Juan Esteba Estrada</option>
                        <option value="2">Carlos Andrés Pérez</option>
                        <option value="3">Fabián de Jesús Tabares</option>
                    </select>
                </label>
                <br>
                <label for="desde">
                    <span>Desde:</span>
                    <input type="date" name="desde" id="desde">
                </label>
                <label for="hasta">
                    <span>Hasta:</span>
                    <input type="date" name="hasta" id="hasta">
                </label>
                <input type="submit" value="Consultar disponibilidad">
            </form>
        </section>
    </main>
    <footer>
        <span>Copyright © Suprofe.com. Derechos reservados. <a href="index.php?action=politica_privacidad">Política de privacidad.</a></span>
    </footer>
</body>
</html>