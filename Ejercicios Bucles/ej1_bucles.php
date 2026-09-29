<HTML>
<HEAD><TITLE> EJ1 Bucles </TITLE></HEAD>
<BODY>
<?php
$inicio = 1;
$fin = 100;

$cantidad_numeros = 0;
$pares = 0;
$impares = 0;
$multiplosDe3 = 0;
$suma_total = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    
    $cantidad_numeros++;   
    $suma_total += $i;    

    if ($i % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    if ($i % 3 == 0) {
        $multiplosDe3++;
    }
}

print "Numeros del $inicio al $fin<br><br>";

print "Cantidad de numeros: $cantidad_numeros<br>";
print "Numeros pares: $pares<br>";
print "Numeros impares: $impares<br>";
print "Multiplos de 3: $multiplosDe3<br>";
print "Suma total: $suma_total<br>";
?>
</BODY>
</HTML>
