<?php 
// EXERCICE6///////////////////////////////////////////////////////////////////////////////////////////
// Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
// "Bonjour" + nom + prénom + ",tu as" + age + "ans"
// $nom = "CHATEAUNEUF";
// $prenom = "Sandrine";
// $age = 43;

function concatenation($printable1, $nom, $prenom,  $printable2, $age, $printable3){
    return $printable1 . $nom . $prenom .  $printable2 . $age . $printable3 ;
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
    
<h2><?= concatenation("Bonjour ", "Chateauneuf ", "Sandrine ", ", tu as ", 43, " ans") ?></h2>

</body>
</html>