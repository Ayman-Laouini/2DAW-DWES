<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fichero 3</title>
</head>
<body>

    <h2>Fichero 3</h2>

<?php
    $nombreFichero = "alumnos1.txt";

 if (file_exists($nombreFichero)) {

        $fichero = fopen($nombreFichero, "r");
        $contadorFilas = 0;

        print "<table border='1'>";
        print "<tr>
                <th>Nombre</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Fecha nacimiento</th>
                <th>Localidad</th>
              </tr>";

        while (($linea = fgets($fichero)) !== false) {

            $nombre     = trim(substr($linea, 0, 40));
            $apellido1  = trim(substr($linea, 40, 41));
            $apellido2  = trim(substr($linea, 81, 42));
            $fechaNacimiento   = trim(substr($linea, 123, 10));
            $localidad  = trim(substr($linea, 133, 27));

            print "<tr>";
            print "<td>" . $nombre . "</td>";
            print "<td>" . $apellido1 . "</td>";
            print "<td>" . $apellido2 . "</td>";
            print "<td>" . $fechaNacimiento . "</td>";
            print "<td>" . $localidad . "</td>";
            print "</tr>";

            $contadorFilas = $contadorFilas + 1;
        }

        print "</table>";
        fclose($fichero);

        print "<p>Filas leidas: " . $contadorFilas . "</p>";

 } else {
    print "<p>No se encuentra el archivo</p>";
    }
?>

</body>
</html>
