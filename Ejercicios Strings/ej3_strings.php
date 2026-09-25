<HTML>
<HEAD><TITLE> EJ3 Strings  </TITLE></HEAD>
<BODY>
<?php
 $email = "alberto.garcia@educa.madrid.org";

 print("Email: " . $email . "<br>");

 $completo = explode("@", $email);

     $nombreUsuario = $completo[0];
     $Dominio = $completo[1];

   $nombreUsuario = explode("." , $completo[0]);

     $nombre = $nombreUsuario[0];
     $primerApellido = $nombreUsuario[1];

   $Dominio = explode("." ,  $completo[1]);

      $Organizacion = $Dominio[0];
      $municipio = $Dominio[1];
      $Extension = $Dominio[2];

      $usuarioCaracteres = strlen($nombreUsuario[0]) + strlen($nombreUsuario[1]);
      $dominioCaracteres = strlen($Dominio[0]) + strlen($Dominio[1]) + strlen($Dominio[2]) ;

  print("Usuario: " . $nombre . "." . $primerApellido ."<br>");
  print("Dominio: " . $Organizacion . "." . $municipio . "." . $Extension . "<br>");
  print("Organizacion: " . $Organizacion. "<br>");
  print("Extension: " . $Extension. "<br>" . "<br>");



  print("El usuario contiene: " . $usuarioCaracteres. "<br>");
  print("El dominio contiene: " . $dominioCaracteres);

?>
</BODY>
</HTML>
