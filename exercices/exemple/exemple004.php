<?php 
    $titre = "Exemple 004 - Les Les tableaux";
    require "../common/template.php" ?>
<!-- PARTIE 1 -->
    <?php 
    // déclarer un tableau de manière classique
        $tableau = array(
            1 => "Bonjour",
            2 => "Deuxième entrée",
            'key' => 3,
            'Booleen' => true,
            'tableau' => array(
                1 => "Nouveau",
                2 => "tableau"
            )
            );
        // var_dump affiche les informations de la variables
        var_dump($tableau);

        // déclarer un tableau en syntaxe courte
        $tableau2 = [
            1 => "Syntaxe courte",
            2 => "pour écrire un autre tableau",
            "3" => "la clé 3 sera considérée comme étant de type entier",
            4.5 => "la clé 4.5 sera convertie en entier elle aussi",
            false => "un boolean sera converti en binaire (1 ou 0)",
            null => "la clé null sera converie en chaine de caractère vide"

        ];
        var_dump($tableau2);

        // déclarer un tableau auto-incrémenté
        $tableauAutoIncrémenté = ["Bonjour", "ceci est", "un tableau", 'auto-incrémenté'];
        var_dump($tableauAutoIncrémenté);

   ?>
    <!-- PARTIE 2 -->
    <?php
        $identité = [
            'id' => 1,
            'nom' => 'Vilain',
            'prénom' => 'Guy',
            'âge' => 42,
            'profession' => "Web / Mobile Dev"
        ];

    ?>
   
    <h3>Carte d'indentité</h3>
    <p>Nom : <?= $identité['nom'] ?></p>
    <p>Prénom : <?= $identité['prénom'] ?> </p>
    <p>Âge: <?= $identité['âge'] ?></p>
    <p>Profession : <?= $identité['profession'] ?></p>

    <!-- Dans le cas d'un tableau auto-incrémenté -->
    <?php
        $personne = [2, 'Debbache', 'Karim', 40, 'Etalonneur cinéma'];
    ?>

    <h3>Carte d'indentité</h3>
    <p>Nom : <?= $personne[1] ?></p>
    <p>Prénom : <?= $personne[2] ?> </p>
    <p>Âge: <?= $personne[3] ?></p>
    <p>Profession : <?= $personne[4] ?></p>

    <!-- PARTIE 3 -->

    <?php
        $monTableau = [1, 2, 3, 4, 5, 6, 7, 8];
        print_r($monTableau);

        // Je rajoute un élément à la fin de mon tableau:
        $monTableau[] = 9;
        var_dump($monTableau);

        //Je rajoute un élément avec une clé définie
        $monTableau['Bonus'] = 'chaine de caractère';
        print_r($monTableau);

        // Manipulation tableau avec les fonctions natives de php:
        // Rajouter deux valeurs en fin de tableau 
        array_push($monTableau, 9, 10);
        var_dump($monTableau);

        //Rajouter deux valeurs en début de tableau
        array_unshift($monTableau, 'ceci est un tableau', 'il nous aide à comprendre la manipulation de données');
        print_r($monTableau);

        //Retirer la dernière valeur d'un tableau:
        array_pop($monTableau);
        var_dump($monTableau);

        //Retirer la première valeur d'un tableau
        array_shift($monTableau);
        print_r($monTableau);

        //Retirer une valeur à un index précis
        unset($monTableau[6]);
        unset($monTableau[0]);
        var_dump($monTableau);
        
        //Retirer une clé string 
        unset($monTableau['Bonus']);
        print_r($monTableau);

        //réindexer un tableau
        $monTableau = array_values($monTableau);
        var_dump($monTableau);

        //Effacer un tableau
        unset($monTableau);
        var_dump($monTableau);
    

    ?>

</body>
</html>