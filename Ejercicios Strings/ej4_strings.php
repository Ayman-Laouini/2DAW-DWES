<HTML>
<HEAD><TITLE> EJ4 Strings  </TITLE></HEAD>
<BODY>

<?php
$titulo = "Introducción a la Programación Web con PHP";

$link = trim($titulo);

$link = strtolower($link);


$link = str_replace(" ", "-", $link);


$link = str_replace("ó", "o", $link);


print '<a href="http://' . $link . '">http://' . $link . '</a>';
?>

</BODY>
</HTML>
