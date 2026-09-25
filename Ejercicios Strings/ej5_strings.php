<HTML>
<HEAD><TITLE> EJ5 Strings </TITLE></HEAD>
<BODY>

<?php
 $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";



$trozos_protocolo = explode("://", $url);
$protocolo        = $trozos_protocolo[0];
$resto_url        = $trozos_protocolo[1]; 


$trozos_interrogante = explode("?", $resto_url);
$web         = $trozos_interrogante[0];
$parametro_completo = $trozos_interrogante[1];

$trozos_web = explode("/", $web);
$dominio    = $trozos_web[0];
$ruta       = "/" . $trozos_web[1] . "/" . $trozos_web[2]; 
$fichero    = $trozos_web[2]; 

$id_y_marca = explode("&", $parametro_completo); 

$trozos_id = explode("=", $id_y_marca[0]);
$id_final  = $trozos_id[1];

$trozos_marca = explode("=", $id_y_marca[1]);
$marca_final  = $trozos_marca[1]; 


print "Salida 1:  <br>";
print "Protocolo: $protocolo<br>";
print "Dominio: $dominio<br>";
print "Ruta: $ruta<br>";
print "Fichero: $fichero<br>";
print "Parámetros: $parametro_completo<br>";

print "<hr>";

print "Salida 2 <br>";
print "Protocolo: $protocolo<br>";
print "Dominio: $dominio<br>";
print "Ruta: $ruta<br>";
print "Fichero: $fichero<br>";
print "Id producto=$id_final<br>";
print "Marca=$marca_final<br>";
?>

</BODY>
</HTML>

