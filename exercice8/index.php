<?php 
// EXERCICE8////////////////////////////////////////////////////////////////////////////////////////////
// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut
$var1 = 8;
$var2 = 2;
$var3 = 10;

function additionner($var1, $var2, $var3){
    return $var1 + $var2 + $var3;
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
    
<h2><?= additionner($var1, $var2, $var3) ?></h2>

</body>
</html>