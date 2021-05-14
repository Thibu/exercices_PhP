<?php 
    $titre = "Exemple 005 - Les structures de contrôle!";
    require "../common/template.php" ?>
<!-- PARTIE 1 -->
<?php
    // CONDITIONS IF
    $age = 20;

    if($age >= 18){
        echo "<p>L'utilisateur à $age ans, il est majeur!!</p>";
    };
    // CONDITIONS ELSE

    if($age >= 18){
        echo "<p>L'utilisateur à $age ans, il est majeur!!</p>";
    }else {
        echo "<p>L'utilisateur à $age ans, il est mineur!!</p>";
    }
    // CONDITION ELSEIF

    // Déclaration d'une variable
    $vitesse = rand(1, 180);
    echo "<p>vitesse: $vitesse</p>";
    
    // On teste la valeur de la variable
    if($vitesse > 120)
    {
        echo '<h3>Vous êtes au-dessus de la vitesse réglementaire, ralentissez!</h3>';
    }
    else if($vitesse >= 70 && $vitesse <= 120) 
    {
        echo '<h3>Vous êtes en-dessous de la vitesse réglementaire, tout va bien</h3>';
    } 
    else
    {
        echo '<h3>Vous êtes sur une autoroute, je vous rappelle que la vitesse minimale est de 70km/h</h3>';
    }

    // CONDITIONS IMBRIQUEES
    $pseudo = "Tintin"; 
    $mdp = "lune";

    if($pseudo == "Tintin" && $mdp == "lune"){
        echo "<p>Bonjour $pseudo, vous êtes maintenant connecté</p>";
    }
    else
    {
        if($pseudo != "Tintin"){
            echo "<p>l'identifiant est incorrect</p>";
        }
        if($mdp != "lune") 
        {
            echo "<p>le mot de passe est incorrect</p>";
        }
    }

    // CONDITIONS TERNAIRE
    $number = rand(1, 10);

    echo ($number >= 6) ? "Vous avez obtenu $number/10, vous passez à l'étape supérieure" : "Vous avez obtenu $number/10, il faut penser à une session de rattrapage";

    // SWITCH

    $lancéDeDé = rand(1, 6);

    switch($lancéDeDé)
    {
        case 1 : 
            echo $lancéDeDé . '<p><img src="../img/de/de1.png" style="width: 3em"/></p>';
            break;
        case 2 : 
            echo $lancéDeDé . '<p><img src="../img/de/de2.png" style="width: 3em"/></p>';
            break;        
        case 3 : 
            echo $lancéDeDé . '<p><img src="../img/de/de3.png" style="width: 3em"/></p>';
            break;        
        case 4 : 
            echo $lancéDeDé . '<p><img src="../img/de/de4.png" style="width: 3em"/></p>';
            break;        
        case 5 : 
            echo $lancéDeDé . '<p><img src="../img/de/de5.png" style="width: 3em"/></p>';
            break;        
        case 6 : 
            echo $lancéDeDé . '<p><img src="../img/de/de6.png" style="width: 3em"/></p>';
            break;        
    
        }
?>