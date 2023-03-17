
<?php
$personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
arsort($personas);
$older_person = reset($personas);
print_r($older_person);

echo("<br>");

echo("<a href='index.php'>VOLVER</a>");
?> 

<!-- 4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.

$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5); -->