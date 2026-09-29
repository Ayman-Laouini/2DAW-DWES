<HTML>
<HEAD><TITLE> EJ6 Bucles</TITLE></HEAD>
<BODY>

<?php
  $capital = 1000;
  $interes = 5;
  $años = 5;
  
  print "capital inicial: " . $capital . " € <br><br>";
  

for ($i = 1; $i <= $años; $i++) {

    $capital = $capital + ($capital * ($interes / 100));
      
    print "Año " . $i . ": " . $capital . " €<br>";
  }
  
  print "<br>";
  print "capital final: " . $capital . " €";
?>

</BODY>
</HTML>
