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
            <div class="d-flex justify-content-between mt-2">
                <label for="login">Login :</label>
                <input type="text" name="login">
            </div>
            <div class="d-flex justify-content-between mt-2">
                <label for="password">Mot de passe :</label>
                <input class="ms-2" type="password" name="password" id="">
            </div>
            <button class="mt-2 col-6" type="submit" value="Envoyer">Se connecter</button>
            <p class="mt-2">Pas de compte ? ... <a href="register">S'enregistrer</a></p>
        </form>
    </section>

    <?php
    ?>

    <?php
        if(isset($_POST["login"]) && isset($_POST["password"])){
            
            $login = $_POST["login"];
            $password = $_POST["password"];
            
            $sel = "";
            $mdphash = "";
            $requete2 = $bdd->query("SELECT sel FROM users WHERE login='$login'");
            $sel = $requete2->fetch();

            $mdphash = md5($password);
        
            $concontmdp = $sel[0] . $mdphash;
            
            // echo $concontmdp;

            $requete = $bdd->prepare('SELECT * FROM users 
                                        WHERE login= ? AND password= ?');
            if($sel[0] !=null){
                $requete ->execute(array($login, $concontmdp));
            }else{
                $requete ->execute(array($login, $password));
            }

            while($données = $requete -> fetch()){
                echo '<p> Bonjour ' . $données["login"] . ", tu es maintenant connecté." . '</p>';
            }
        }
    ?>




    

