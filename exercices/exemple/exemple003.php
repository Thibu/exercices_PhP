<?php 
    $titre = "Exemple 003 - Les opérateurs mathétique";
    require "../common/template.php" ?>
<?php
    // OPERATEURS
    $nombreUn = 20;
    $nombreDeux = 5;

    // ADDITIONNER
    $resultat = $nombreUn + $nombreDeux;
    echo    '<h2>ADDITION</h2>
            <p>' . $nombreUn . '+' . $nombreDeux . '=' . $resultat . '.</p>';
    // SOUSTRAIRE
    $resultat = $nombreUn - $nombreDeux;
    echo    '<h2>SOUSTRACTION</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // MULTIPLIER
    $resultat = $nombreUn * $nombreDeux;
    echo    '<h2>MULTIPLICATION</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // DIVISER
    $resultat = $nombreUn / $nombreDeux;
    echo    '<h2>DIVISION</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // MODULO
    $resultat = $nombreUn % $nombreDeux;
    echo    '<h2>MODULO</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // EXPONENTIELLE
    $resultat = $nombreUn ** $nombreDeux;
    echo    '<h2>EXPONENTIELLE</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // INCREMENTATION
    $resultat = 10;
    $resultat ++;
    echo    '<h2>INCREMENTATION</h2>
    <p>' . $resultat . '</p>';
    $resultat +=4;
    echo '<p>' . $resultat . '</p>';
    // DECREMENTATION
    $resultat--;
    echo  '<h2>INCREMENTATION</h2>
    <p>' . $resultat . '</p>';
    $resultat -=4;
    echo '<p>' . $resultat . '</p>';
    
?>