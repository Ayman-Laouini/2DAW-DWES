<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
 $email = "alberto.garcia@educa.madrid.org";

 print("Email: " . $email);

 $Completo = explode("@", $email);

     $nombreUsuario = $completo[0];
     $Dominio = $completo[1];

   $nombreUsuario = explode("." , $completo[0]);

     $nombre = $nombreUsuario[0];
     $primerApellido = $nombreUsuario[1];

   $Dominio = explode("." ,  $completo[1]);

      $Organizacion = $Dominio[0];
      $Extension = $Dominio[2];

  print("Usuario: " . $nombre . "." . $primerApellido ."<br>");

?>
</BODY>
</HTML>