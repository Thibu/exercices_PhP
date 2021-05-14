<?php 
    $titre = "Exemple 007 - Les fonctions";
    require "../common/template.php" ?>
<!-- PARTIE 01 -->
    <?php
        function HelloWorld(){
            echo "<h1>Hello World</h1>";
        }
        
        HelloWorld();
        
        $nom = "Jean-Patrick";
        
        function Bonjour($x){
            echo "<h3>Bonjour $x, heureux de te voir ici</h3>";
        }
        
        Bonjour($nom);
    ?>

    <!-- PARTIE 02 -->

    <?php
        $makefoo = true;

        /* Impossible d'appeler foo() ici,
        car cette fonction n'existe pas.
        Mais nous pouvons utiliser bar() */

        bar();

        if ($makefoo) {
            function foo()
            {
                echo "<h4>Je n'existe pas tant que le programme n'est pas passé ici.</h4>";
            }
        }

        /* Maintenant, nous pouvons appeler foo()
        car $makefoo est évalué à vrai */

        foo();

        function bar()
        {
            echo "<h4>J'existe dès le début du programme.</h4>";
        }
    ?>

    <!-- PARTIE 03 -->

    <?php
            echo "<h3>FONCTION \"INCEPTION\"</h3>";

        function Activer() 
        {
            function Test() 
            {
                echo "Je n'existe pas tant que foo() n'est pas appelé.\n";
            }
        }

        /* Impossible d'appeler Test() ici
        car il n'existe pas. */

        Activer();

        /* Maintenant, nous pouvons appeler Test(),
        car l'utilisation de Activer() l'a rendue
        accessible. */

        Test();
?>

<!-- PARTIE 04 -->
    <h3>FONCTION RECURSIVE</h3>
<?php
        function recursive($a)
        {
            if ($a < 20) {
                echo "<p>$a</p>";
                recursive($a + 1);
            }
        }

        recursive(0);
    ?>

    <!-- PARTIE 05 -->
    <h3>FONCTION AVEC VALEUR DE RETOUR</h3>
    <?php

        function FormuleMagique($x, $y)
        {
            $temp = $x * $y;
            $temp /= 5;
            $temp = $x + $temp - ($x + $y);

            // Utilisation de return, cad envoyer à l'issue de cette ligne de code, la valeur finale
            // que je peux utiliser plus loin dans mon application
            return $temp * $temp;
        }

        // j'encapsule dans une variable la valeur qui sera retournée par ma fonction:

        $resultat = FormuleMagique(20, 30);

        $valeur1 = 12;
        $valeur2 = 40;

        $resultat2 = FormuleMagique($valeur1, $valeur2);

        $resultat3 = FormuleMagique(rand(1, 100), rand(1, 100));

        // J'utilise les données comme n'importe quelle autre variable:
        echo "<h3>Les résultats de la première opération est $resultat, le résultat de la seconde est $resultat2, et le résultat de l'opération aléatoire est $resultat3</h3>"

    ?>

</body>
</html>