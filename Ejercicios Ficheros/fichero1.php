<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fichero 1</title>
</head>
<body>
    <h3>Ficheros 1</h3>

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
    $nombre    = str_pad($_POST["nombre"], 40, " ");
    $apellido1 = str_pad($_POST["apellido1"], 41, " ");
    $apellido2 = str_pad($_POST["apellido2"], 42, " ");
    $fecha     = str_pad($_POST["fecha"], 10, " ");
    $localidad = str_pad($_POST["localidad"], 27, " ");

    $linea = $nombre . $apellido1 . $apellido2 . $fecha . $localidad . "\n";

        $fichero = fopen("alumnos1.txt", "a");

        fwrite($fichero, $linea);
        fclose($fichero);

        print "<p>Alumno guardado</p>";
 }
?>
</body>
</html>
