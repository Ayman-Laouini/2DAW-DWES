<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
echo "Nombre del programa: " ,$_SERVER["PHP_SELF"] ."<br>";

      $operando1 = $_POST['operando1'];
      $operando2 = $_POST['operando2'];
       $operacion = $_POST['operacion'];

    if ($operacion == 'Suma') {

        $resultado = $operando1 + $operando2;

    } elseif ($operacion == 'Resta') {

        $resultado = $operando1 - $operando2;

    } elseif ($operacion == 'Producto') {

        $resultado = $operando1 * $operando2;

    } elseif ($operacion == 'Division') {

        $resultado = $operando1 / $operando2;
    }

echo "Operando 1: " . $operando1 . "<br>";
echo "Operando 2: " . $operando2 . "<br>";
echo "Operacion realizada: " . $operacion . "<br>";
echo "Resultado: " . $resultado . "<br>";
}
?>
