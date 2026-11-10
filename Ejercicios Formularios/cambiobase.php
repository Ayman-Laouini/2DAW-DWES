<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
    echo "Nombre del programa: " ,$_SERVER["PHP_SELF"] ."<br>";

    $decimal = $_POST['decimal'];
    $sistema = $_POST['sistema'];

    echo "numero Decimal: " . $decimal . "<br>";

    if ($sistema == 'Binario') {

        $binario = base_convert($decimal, 10, 2);
        echo "numero Binario: " . $binario . "<br>";

    } elseif ($sistema == 'Octal') {

        $octal = base_convert($decimal, 10, 8);
        echo "Numero Octal: " . $octal . "<br>";

    } elseif ($sistema == 'Hexadecimal') {

        $hexadecimal = strtoupper(base_convert($decimal, 10, 16));
        echo "numero Hexadecimal: " . $hexadecimal . "<br>";

    } elseif ($sistema == 'Todos') {
        
        $binario = base_convert($decimal, 10, 2);
        $octal = base_convert($decimal, 10, 8);
        $hexadecimal = strtoupper(base_convert($decimal, 10, 16));

        echo "Numero Binario: " . $binario . "<br>";
        echo "Numero Octal: " . $octal . "<br>";
        echo "Numero Hexadecimal: " . $hexadecimal . "<br>";


    }
}
?>
