<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficheros 5</title>
</head>
<body>

    <h3>Ficheros 5</h3>

    <form method="POST" action="">
        Ruta del fichero: <input type="text" name="ruta" required><br><br>

        Operaciones:<br>
        <input type="radio" name="operacion" value="todo" checked> Mostrar fichero<br>
        <input type="radio" name="operacion" value="linea"> Mostrar linea 
        <input type="number" name="num_linea" min="1" value="1"><br>
        <input type="radio" name="operacion" value="primeras"> Mostrar N primeras lineas 
        <input type="number" name="num_primeras" min="1" value="5"><br><br>

        <input type="submit" value="Ejecutar operacion">
        <input type="reset" value="Borrar">
    </form>

<?php

    if ($_POST) {
        $ruta = trim($_POST["ruta"]);
        $operacion = $_POST["operacion"];

        if (file_exists($ruta)) {

            print "<h3>Contenido:</h3>";
            $fichero = fopen($ruta, "r");
            $contador = 1;

        if ($operacion == "todo") {

            while (($linea = fgets($fichero)) !== false) {

            print "Linea " . $contador . ": " . $linea . "<br>";
            $contador++;
                }
            }

        if ($operacion == "linea") {

            $lineaBuscada = $_POST["num_linea"];
            $encontrada = false;

        while (($linea = fgets($fichero)) !== false) {
            
            if ($contador == $lineaBuscada) {
                print "Linea " . $contador . ": " . $linea . "<br>";
                $encontrada = true;
                  break;
                      }

                $contador = $contador + 1;
                }

                if (!$encontrada) {
                    print "<p>No hay suficientes lineas en el fichero</p>";
                }
            }

            if ($operacion == "primeras") {

                $limite = $_POST["num_primeras"];

                while (($linea = fgets($fichero)) !== false && $contador <= $limite) {

                    print "Linea " . $contador . ": " . $linea . "<br>";
                    $contador = $contador + 1;
                }
            }

            fclose($fichero);

        } else {
            print "<p>No existe el fichero en esa ruta</p>";
        }
    }
    ?>

</body>
</html>
