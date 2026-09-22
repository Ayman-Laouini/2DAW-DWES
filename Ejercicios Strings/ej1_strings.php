<HTML>
<HEAD><TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";
$ip2= "10.33.161.2";

$partes = explode(".", $ip);
$partes2 = explode(".", $ip2);

$p1 = decbin($partes[0]);
$p2 = decbin($partes[1]);
$p3 = decbin($partes[2]);
$p4 = decbin($partes[3]);

$pa1 = decbin($partes2[0]);
$pa2 = decbin($partes2[1]);
$pa3 = decbin($partes2[2]);
$pa4 = decbin($partes2[3]);

printf("IP $ip en binario es" . $p1 . "." . $p2 . "." . $p3 . "." . $p4 . ". ". "<br>");

printf("IP $ip2 en binario es" . $pa1 . "." . $pa2 . "." . $pa3 . "." . $pa4);
?>
</BODY>
</HTML>
