<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Disponibilidad del profesor</title>
</head>
<body>
    <header>
        <a href="./inicio.html">
            <img src="../images/logo.jpg" alt="Logo de suprofe.com" width="100" height="100">
        </a>
        <nav>
            <a href="./homeUsuario.html">Home</a>
            <a href="https://wa.me/573053070002?text=Me%20gustar%C3%ADa%20tener%20m%C3%A1s%20informaci%C3%B3n"  target="_blank">Contáctanos</a>
            <a href="#">Cambiar clave</a>
            <a href="#">Actualizar datos</a>
            <a href="./login.html">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <section>
            <h1>Disponibilidad</h1>
            <h2>Profesor:</h2>
            <p>Juan José Reyes</p>
            <h2>Materia:</h2>
            <p>Química</p>
            <table>
                <thead>
                    <tr>
                        <th>Selección</th>
                        <th>Fecha</th>
                        <th>Hora inicio</th>
                        <th>Hora fin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="1"></td>
                        <td>19/04/2021</td>
                        <td>08:00</td>
                        <td>12:00</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="2"></td>
                        <td>20/04/2021</td>
                        <td>10:00</td>
                        <td>12:00</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="3"></td>
                        <td>21/04/2021</td>
                        <td>08:00</td>
                        <td>12:00</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="4"></td>
                        <td>22/04/2021</td>
                        <td>12:00</td>
                        <td>16:00</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="5"></td>
                        <td>23/04/2021</td>
                        <td>08:00</td>
                        <td>12:00</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section>
            <input type="button" value="Reservar asesoría">
        </section>
    </main>
    <footer>
        <p>Copyright © Suprofe.com. Derechos reservados. <a href="index.php?action=politica_privacidad">Política de privacidad.</a></p>
    </footer>
</body>
</html>