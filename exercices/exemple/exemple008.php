<?php 
    $titre = "Exemple 008 - Quelques fonctions natives";
    require "../common/template.php" 
    ?>
<div class="principal">


        <!-- PARTIE 1 -->
        <h2>Quelques fonctions string</h2>

        <?php

            $string = "Voici Une Chaîne De caractéres qui va nous permettre de tester quelques fonctions natives.";
            // strlen
            echo "<h3>strlen</h3>";
            echo $string;
            echo "<p>Cette chaine contient " . strlen($string) . " caractères!</p>";

            // str_replace
            echo "<h3>str_replace</h3>";
            echo "<p>la string transformée: " . str_replace("qui va nous permettre", "<span style='font-weight: bold'>que nous allons pouvoir manipuler</span>", $string) . "</p>"; 
            echo "<p>Cette nouvelle chaine contient " . strlen($string) . " caractères! 
            tu remarqueras que la variable initiale n'a pas bougé, si tu veux conserver le changement, 
            tu dois l'inclure dans une variable:</p>";

            $string2 = str_replace("qui va nous permettre", "<span style='font-weight: bold'>que nous allons pouvoir manipuler</span>", $string);
            echo "<p> $string2 </p>";
            echo "<p>Cette nouvelle chaine contient " . strlen($string2) . " caractères!</p>";

            // strolower
            echo "<h3>strolower</h3>";
            echo strtolower($string2);

            echo "<h3>strtoupper</h3>";
            echo strtoupper($string2);

            echo "<h3>substr</h3>";
            echo substr($string2, 6, 26);
        ?>

        <!-- PARTIE 02 -->
        <h2>Quelques fonctions Mathématique</h2>
        <?php
            // abs
            $valeur = -82;
            echo "<p>la valeur absolue de $valeur est " . abs($valeur) . ".</p>";
            // max
            echo "<h4> la meilleure note est :" . max(10, 20, 45, 35, 65, 3) . "</h4>";

            // min
            echo "<h4> la petite note est :" . min(10, 20, 45, 35, 65, 3) . "</h4>";

            // round
            $nombre = 3254.212548;
            echo "<h4>" . round($nombre, 2) . ", est l'arrondi à deux virgules de $nombre";
        ?>
</div>

<script>alert("hello World")</script>

