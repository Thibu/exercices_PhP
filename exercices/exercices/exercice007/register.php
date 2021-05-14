<?php 
    $titre = "Exercice Série 007 - Communiquer avec la base de donnée";
    require "../../common/template.php"; 
    ?>
    <link rel="stylesheet" href="style.css">

    <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=formation_php_exo7;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        };
    ?>

    <section class="container d-flex justify-content-center">
        <form method="post" class="d-flex flex-column border border-success p-2" action="">
            <h3>Créer un compte</h2>
            <div class="d-flex justify-content-between mt-2">
                <label for="name">Nom :</label>
                <input type="text" name="name">
            </div>
            <div class="d-flex justify-content-between mt-2">
                <label for="surname">Prenom :</label>
                <input type="text" name="surname">
            </div>
            <div class="d-flex justify-content-between mt-2">
                <label for="login">Login :</label>
                <input type="text" name="login">
            </div>
            <div class="d-flex justify-content-between mt-2">
                <label for="mdp">Mot de passe :</label>
                <input class="ms-2" type="password" name="mdp" id="">
            </div>
            <button class="mt-2" type="submit" name="submit">S'inscrire</button>
        </form>
    </section>

    <?php 
        if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["login"]) && isset($_POST["mdp"])){
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $login = $_POST["login"];
            $mdp = $_POST["mdp"];
        }
    ?>

    <?php
        if(isset($_POST["submit"]) && $name != null && $surname != null && $login != null && $mdp != null){
            function salty($x){
                $chars = "0123456789abcdef";
                $random ="";
                for($i = 0; $i < $x; $i++){
                    $random .= $chars[rand(0, strlen($chars) - 1)];
                }
                return $random;
            }

            $sel = salty(rand(5,10));

            $mdpmd5 = $sel . md5($mdp);

            $requete = $bdd->exec("INSERT INTO users(`nom`, `prenom`, `login`, `password`, `sel`)
            VALUES('$name', '$surname', '$login', '$mdpmd5', '$sel')")
            or die(print_r($bdd->errorInfo()));
            echo "Inscription réussie !";
        }
    ?>
