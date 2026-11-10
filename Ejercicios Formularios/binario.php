<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    echo "El metodo usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
    echo "Nombre del programa: " ,$_SERVER["PHP_SELF"] ."<br>";

    $decimal = $_POST['decimal'];

    $binario = decbin($decimal);

    echo "numero decimal: " . $decimal . "<br>";
    echo "numero binario: " . $binario . "<br>";
}
?>
