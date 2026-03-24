<?php 
// EXERCICE4//////////////////////////////////////////////////////////////////////////////////////
// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

// Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
// Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
// Les deux nombres sont identiques si les deux nombres sont égaux

function deuxNombres($nb1, $nb2){
    if ($nb1 > $nb2) {
     return $message = "Le premier nombre est plus grand ";
    }
   if ($nb1 < $nb2) {
     return $message = "Le premier nombre est plus petit ";
    }
    if ($nb1 = $nb2) {
     return $message = "Les deux nombres sont identiques ";
    }
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
    <p><?= deuxNombres(10, 10) ?></p>
</body>
</html>