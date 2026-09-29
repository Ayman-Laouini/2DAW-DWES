<HTML>
<HEAD><TITLE> EJ2 Bucles </TITLE></HEAD>
<BODY>
<?php
$num = 8;

print "<table border='1'";
print "<tr>";
print "<th>Operación</th>";
print "<th>Resultado</th>";
print "</tr>";


for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i; 
    
    print "<tr>";
    print "<td>$num x $i</td>"; 
    print "<td>$resultado</td>"; 
    print "</tr>";
}

print "</table>";
?>
</BODY>
</HTML>
