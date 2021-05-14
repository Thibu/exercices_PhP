<?php 
    $titre = "Exemple 006 - Les boucles";
    require "../common/template.php" ?>
    <!-- PARTIE 1 -->
    <h2>La boucle While</h2>
    <?php
        // Les boucles while
    
        $ligne = 1;

        while($ligne <= 10):
            echo "<p>php a généré la ligne <span style='font-weight: bold'>$ligne</span></p>";
            $ligne++;
        endwhile;
    ?>
    <h2>La boucle for</h2>

    <?php
        for($i = 0; $i <= 10 ; $i++):
            echo "<p>la boucle for génère la ligne <span style='font-weight: bold'>$i</span><p>";
        endfor;
    ?>

    <h2>La boucle foreach version 1</h2>

    <?php
        // FOREACH VERSION 1
        $user = ['Guy', 'Rolande', 'Raymonde', 'Barnabé', 'Antoine', 'Michèle', 'Phillipe'];

        foreach ($user as $utilisateur) {
            echo "<p>Ma boucle foreach passe maitenant sur <span style='font-weight: bold'>$utilisateur</span></p>";
        };

        echo "<h2>La boucle foreach version 2</h2>";
        // FOREACH VERSION 2 
        foreach($user as $key => $utilisateur):
            $tab = $key + 1;
            echo "<p>Ma boucle foreach passe maitenant sur le user n°<span style='font-weight: bold'>$tab</span> <span style='font-weight: bold'>$utilisateur</span></p>";
        endforeach;
    ?>