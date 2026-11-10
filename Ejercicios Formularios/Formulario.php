<!DOCTYPE html>
<html>
<head> 
    <title> FORMULARIO BASE </title>
</head>
<body>

<form name='mi_formulario' action='Formulario.php' method='post'>

    Numero de factura
    <input type='text' name='nombre' value='' size=15><br>

    Proveedor:
    <input type='text' name='proveedor' value='' size=15><br>
    
    Importe:
    <input type='text' name='importe' value='' size=15><br>
    
    IVA:<br>
 
    <input type='radio' name='iva' value='10%'>10%<br>
    <input type='radio' checked name='iva' value='21%'>21%<br>
    
    <input type="submit" value="alta factura">
    <input type="reset" value="borrar">

</form> 

</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){


echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
echo "Nombre del programa " ,$_SERVER["PHP_SELF"] ."<br>";
$factura = $_POST['nombre'];

$proveedor = $_POST['proveedor'];
$importe = $_POST['importe'];
$iva = $_POST['iva']; 

$cuota_iva = (float)$importe * ((float)$iva / 100);
$total = (float)$importe + $cuota_iva;

echo "Numero de factura: " . $factura . "<br>";
echo "Proveedor: " . $proveedor . "<br>";
echo "Base : " . $importe . " €<br>";
echo "IVA aplicado: " . $iva . "<br>";
echo "Total Factura: " . $total ." €<br>";
}
?>

