<?php

function cantidad_caracteres($text)
{
    return strlen($text);
}

if ($_POST) {
    echo ('Tu texto "' . $_POST["text"] . '" contine: ' . cantidad_caracteres($_POST["text"]) . " letra/s");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CONTADOR DE LETRAS</h1>
    <form action="" method="post">
        <textarea name="text"></textarea><br>
        <input type="submit" value="CONTAR!">

    </form>

    <a href="index.php">VOLVER</a>
</body>

</html>

<!-- 
5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto. -->