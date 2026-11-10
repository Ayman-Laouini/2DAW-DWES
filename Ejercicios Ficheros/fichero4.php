<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fichero 4</title>
</head>
<body>

    <h2>Ficheros 4</h2>

<?php
    $nombreFichero = "alumnos2.txt";

    if (file_exists($nombreFichero)) {

        $fichero = fopen($nombreFichero, "r");

        $contadorFilas = 0;

        print "<table border='1'>";
        print "<tr>
                <th>Nombre</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Fecha</th>
                <th>Localidad</th>
              </tr>";

        while (($linea = fgets($fichero)) !== false) {

            $lineaLimpia = trim($linea);

            if ($lineaLimpia != "") {
                $datos = explode("##", $lineaLimpia);

                print "<tr>";
                print "<td>" . $datos[0] . "</td>";
                print "<td>" . $datos[1] . "</td>";
                print "<td>" . $datos[2] . "</td>";
                print "<td>" . $datos[3] . "</td>";
                print "<td>" . $datos[4] . "</td>";
                print "</tr>";

                $contadorFilas = $contadorFilas + 1;
            }
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
