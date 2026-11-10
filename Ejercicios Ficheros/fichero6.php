<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fichero 6</title>
</head>
<body>

    <h3>Ficheros 6</h3>

    <form method="POST" action="">
        Fichero (Ruta/nombre): <input type="text" name="ruta" required><br><br>

        <input type="submit" value="Ver datos fichero">
        <input type="reset" value="Borrar">
    </form>

<?php

    if ($_POST) {

        $ruta = trim($_POST["ruta"]);

        if (file_exists($ruta)) {

         $nombre = basename($ruta);
         $rutaCompleta = realpath($ruta);
         $tamaño = filesize($ruta);
         $ultimoAcceso = date("d/m/Y", fileatime($ruta));
         $ultimaModificacion = date("d/m/Y", filemtime($ruta));
         $tipo = strtoupper(pathinfo($ruta, PATHINFO_EXTENSION));

            print "<h3>Fichero</h3>";
            print "Nombre: " . $nombre . "<br>";
            print "Ruta: " . $rutaCompleta . "<br>";
            print "Tamaño: " . $tamaño . " bytes<br>";
            print "Ultimo acceso: " . $ultimoAcceso . "<br>";
            print "Ultima modificacion: " . $ultimaModificacion . "<br>";
            print "Tipo: " . $tipo . "<br>";

        } else {
            print "<p>No existe el fichero en esa ruta</p>";
        }
    }
?>

</body>
</html>
