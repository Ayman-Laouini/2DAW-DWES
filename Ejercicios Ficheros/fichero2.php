<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fichero 2</title>
</head>
<body>
    <h3>Ficheros 2</h3>

    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellido 1: <input type="text" name="apellido1" required><br><br>
        Apellido 2: <input type="text" name="apellido2" required><br><br>
        Fecha nacimiento: <input type="text" name="fecha" placeholder="dd/mm/aaaa" required><br><br>
        Localidad: <input type="text" name="localidad" required><br><br>

        <input type="submit" value="Guardar alumno">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_POST) {
        $nombre    = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $fecha     = $_POST["fecha"];
        $localidad = $_POST["localidad"];

        $linea = $nombre . "##" . $apellido1 . "##" . $apellido2 . "##" . $fecha . "##" . $localidad . "\n";

        $fichero = fopen("alumnos2.txt", "a");
        fwrite($fichero, $linea);
        fclose($fichero);

        print "<p>Alumno guardado </p>";
    }
    ?>
</body>
</html>
