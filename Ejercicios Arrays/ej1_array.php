<HTML>
<HEAD><TITLE> EJ1 ARRAYS </TITLE></HEAD>
<BODY>

<?php
  $impares = array();

  for ($i = 0; $i < 20; $i++) {
    
      $impares[$i] = (2 * $i) + 1;
  }

  print "<table border='1'>";
  print "<tr>
    <th>Indice</th>
    <th>Valor</th>
    <th>Suma</th>
 </tr>";
  
 $suma = 0; 
  

for ($i = 0; $i < 20; $i++) {

  $valor = $impares[$i];
  $suma = $suma + $valor;
      
    print "<tr>";
    print "<td>" . $i . "</td>";
    print "<td>" . $valor . "</td>";
    print "<td>" . $suma . "</td>";
    print "</tr>";
  }

  print "</table>";
?>

</BODY>
</HTML>
