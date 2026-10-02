<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ2 ARRAYS</title>
</head>
<body>

<?php
$temperaturas = array(18, 21, 19, 24, 25, 22, 20, 26, 23, 21);

print "<table border='1'>";
print "<tr>
        <th>Dia</th>
        <th>Temperatura</th>
        <th>Diferencia dia anterior</th>
      </tr>";

      
for ($i = 0; $i < count($temperaturas); $i++) {
    
    if ($i == 0) {
        $diferencia = ""; 
    } else {
        $diferencia = $temperaturas[$i] - $temperaturas[$i - 1];
    }
    
    print "<tr>";
    print "<td>" . ($i + 1) . "</td>"; 
    print "<td>" . $temperaturas[$i] . "</td>";
    print "<td>" . $diferencia . "</td>";
    print "</tr>";
}

print "</table>";
?>

</body>
</html>