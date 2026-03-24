<?php 
// EXERCICE3////////////////////////////////////////////////////////////////////////////////////////
// Faire une fonction qui prend en paramètre 
// deux chaines de caractères et qui revoit la concaténation de ces deux chaines
function concatenation($message1, $message2){
    return $message1 . $message2;
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
    <p><?= concatenation("Hello ", "les p'tits crotales") ?></p>
    <p><?= concatenation("Demain ", "j'arrête !") ?></p>
</body>
</html>