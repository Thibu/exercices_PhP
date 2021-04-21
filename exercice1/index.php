<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $a = 3;
    $b = 5;
    $c = 7;
    

    echo " <p> ***************** AVANT PERMRUTATION ***************** </p>";
    
    echo "<p> A : $a</p>";
    echo "<p> B : $b</p>";
    echo "<p> C : $c</p>";

    $temp = $c;
    $c = $a;
    $a = $b;
    $b = $temp;
    
    echo " <p> ***************** APRES PERMRUTATION ***************** </p>";
    
    echo "<p> A : $a</p>";
    echo "<p> B : $b</p>";
    echo "<p> C : $c</p>";

    echo "<p>********************************************************</p>";
?>

<?php

$nom = "Marie";
$nom2 = "Pierre";
$age = 29;
$age2 = 30;
$genre = "homme";
$genre2 = "femme";

echo "<p>$nom à $age ans, et c'est un $genre</p>";
echo "<p>$nom2 à $age2 ans, et c'est un $genre2</p>";

    echo "<p>********************************************************</p>";
?> 
<?php
    $tab = [
        "prenom" => "Guy",
        "nom" => "Vilain",
        "age" => 42,
        "annee_naissance" => 1979
    ];

    echo '<p>Bonjour '.$tab['prenom'].' '.$tab['nom'].', tu as '.$tab['age'].' ans, tu es probablement né en '.$tab['annee_naissance'].'.</p>';
?>
</body>
</html>