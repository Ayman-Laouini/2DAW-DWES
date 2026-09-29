<HTML>
<HEAD><TITLE> EJ5 Bucles </TITLE></HEAD>
<BODY>

<?php
  $num = 5;
  $factorial = 1;
  
  print $num . "! = ";
  

  for ($i = $num; $i >= 1; $i--) {
      $factorial = $factorial * $i;
      
      if ($i > 1) {
          print $i . " x ";
      } else {
          print $i;
      }
  }
  
  print " = " . $factorial;
?>

</BODY>
</HTML>
