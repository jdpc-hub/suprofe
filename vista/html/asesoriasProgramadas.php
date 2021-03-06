<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Asesorías programadas</title>
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
            <h1>Aquí se muestran las asesorías que tienes programadas</h1>
            <table>
                <thead>
                    <tr>
                        <th>Selección</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Nombre del profesor</th>
                        <th>Tema de la asesoría</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="1"></td>
                        <td>12-5-2021</td>
                        <td>10:45</td>
                        <td>Juan Gabriel Espinoza</td>
                        <td>Física</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="selec" id="selec" value="2"></td>
                        <td>13-5-2021</td>
                        <td>15:45</td>
                        <td>Javier Alejandro Martínez</td>
                        <td>Biología</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="section">
            <input type="button" value="Ir a sesión de asesoría">
            <input type="button" value="Cancelar seión de asesoría">
            <!-- <a href="">Ir a sesión de asesoría</a>
            <a href="">Cancelar sesión de asesoría</a> -->
        </section>
    </main>
    <footer>
        <span>Copyright © Suprofe.com. Derechos reservados. <a href="index.php?action=politica_privacidad">Política de privacidad.</a></span>
    </footer>
</body>
</html>