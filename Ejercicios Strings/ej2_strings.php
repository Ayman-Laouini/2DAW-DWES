<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
 $nombre = " aLBeRTo gaRCia loPEz ";


 print("cadena original: " . $nombre . "<br>");

 
 $separado = trim($nombre);
 $minusculas = strtolower($separado);
 $nombreNormalizado = ucwords($minusculas);

 print("Nombre normalizado: " . $nombreNormalizado . "<br>" );

  $caracteres = strlen($nombre);

 print("Numero de caracteres: " . $caracteres . "<br>");

 $partes = explode(" ", $nombreNormalizado);

   $nom = $partes[0];
   $primerApellido = $partes[1];
   $SegundoApellido = $partes[2];

  print("Nombre: " . $nom . "<br>");
  print("Primer Apellido: " . $primerApellido . "<br>");
  print("Segundo Apellido: " . $SegundoApellido . "<br>");

    $inicialNombre = substr($nom,0,1);
    $inicialPrimerApellido = substr($primerApellido,0,1);
    $inicialSegundoApellido = substr($SegundoApellido,0,1);
    
    print ("Iniciales: " . $inicialNombre . "." . $inicialPrimerApellido . "." . $inicialSegundoApellido . "<br>");
    $usuario = strtolower($nom) . "." . strtolower($primerApellido);
    print("Nombre de Usuario: " . $usuario)
?>
</BODY>
</HTML>