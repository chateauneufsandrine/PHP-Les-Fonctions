<?php 
// EXERCICE2/////////////////////////////////////////////////////////////////////////////////////////////
// Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine

function printString($message){
    return $message;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= printString("Hello world") ?></p>
</body>
</html>