<HTML>
<HEAD><TITLE> EJ7 Bucles </TITLE></HEAD>
<BODY>

<?php
  $num = 168;
  $original = $num; 
  $binario = "";
  
  while ($num > 0) {
      $resto = $num % 2; 
      $binario = $resto . $binario;
      $num = (int)($num / 2);     
  }

  print "Numero " . $original . " en binario = " . $binario;
?>

</BODY>
</HTML>
