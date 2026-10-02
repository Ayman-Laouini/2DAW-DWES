<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJ3 ARRAYS</title>
</head>
<body>

<?php
$numeros = array();

for($i=0; $i<20; $i++){
$numeros[$i] = rand(1, 100);
}

$pares = 0;
$impares = 0;
$suma_pares = 0;
$suma_impares = 0;
$max_par = 0;
$max_impar = 0;
$contador_pares = 0;
$contador_impares = 0;

for($i=0; $i<20; $i++){
    
    if($numeros[$i] % 2 == 0){
    $contador_pares = $contador_pares + 1;
    $suma_pares = $suma_pares + $numeros[$i];
    $pares = $pares . $numeros[$i] . " ";
        
     if($numeros[$i] > $max_par){
    $max_par = $numeros[$i];
         }
    } 
else {
   $contador_impares = $contador_impares + 1;
   $suma_impares = $suma_impares + $numeros[$i];
   $impares = $impares . $numeros[$i] . " ";
        
   if($numeros[$i] > $max_impar){
    $max_impar = $numeros[$i];
          }
     }
  }

$media_par = 0;
    if($contador_pares > 0) {
    $media_par = $suma_pares / $contador_pares;
     }

$media_impar = 0;
    if($contador_impares > 0) {
    $media_impar = $suma_impares / $contador_impares;
       }

     print "PARES: " . $pares . "<br>";
     print "IMPARES: " . $impares . "<br>";
     print "MEDIA PARES: " . $media_par . "<br>";
     print "MEDIA IMPARES: " . $media_impar . "<br>";
      print "MAXIMO PAR: " . $max_par . "<br>";
      print "MAXIMO IMPAR: " . $max_impar . "<br>";
      print "TOTAL PARES: " . $contador_pares . "<br>";
      print "TOTAL IMPARES: " . $contador_impares;
?>
    
</body>
</html>
