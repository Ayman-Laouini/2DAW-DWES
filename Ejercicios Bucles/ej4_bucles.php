<HTML>
<HEAD><TITLE>EJ4 Bucles</TITLE></HEAD>
<BODY>

<?php
  $num = 17;
  
 
  print "Numero: " . $num . "<br><br>";
  
  $esPrimo = true;
  
  for ($i = 2; $i < $num; $i++) {

      if ($num % $i == 0) {
          print "Probando divisor " . $i . " -> Divisible<br>";
          $esPrimo = false;
      } else {
          print "Probando divisor " . $i . " -> No divisible<br>";
      }
  }

  print"<br>";

  if ($esPrimo) {
    print $num . " es un numero primo.";

  } else {

      print $num . " no es un numero primo.";
  }
?>

</BODY>
</HTML>
