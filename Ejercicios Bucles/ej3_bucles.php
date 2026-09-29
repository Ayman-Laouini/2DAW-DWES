<HTML>
<HEAD><TITLE> EJ3 Bucles</TITLE></HEAD>
<BODY>
<?php
$num1 = 3;
$num2 = 7;

for ($tabla = $num1; $tabla <= $num2; $tabla++) {
    
    print "<h3>Tabla del $tabla</h3>";
    
   
    print "<table border='1'>";
    print "<tr>";
    print "<th>Operación</th>";
    print "<th>Resultado</th>";
    print "</tr>";


    for ($i = 1; $i <= 10; $i++) {
        $resultado = $tabla * $i;
        
        print "<tr>";
        print "<td>$tabla x $i</td>";
        print "<td>$resultado</td>";
        print "</tr>";
    }

    print "</table>";
}
?>
</BODY>
</HTML>
