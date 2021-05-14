<?php 
    $titre = "Exemple 016 - Sécurité: Les injections Sql";
    require "../common/template.php"; 

    // Variable de connexion à la BD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    };

    // Si je rentre en login " or 1=1; /* et en mot de passe */-- je vais pouvoir récupérer toutes les données de ma table
    // if(isset($_POST["login"]) && isset($_POST["password"])){
    //     $requete = $bdd->query('SELECT * 
    //                             FROM users
    //                             WHERE login="'. $_POST["login"].'" AND password="'. $_POST["password"] .'"');
    //     while($données = $requete -> fetch()){
    //         echo '<p>' . $données["login"] . " / " . $données["password"] . '</p>';
    //     }
    // }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
        </tr>
    </table>
</form>
<!-- Méthode sécurisée -->
<?php
    if(isset($_POST["login"]) && isset($_POST["password"])){
            $login = $_POST["login"]; 
            $password = $_POST["password"];
            // Je prépare ma requête
            $requete = $bdd->prepare('SELECT * 
                                    FROM users
                                    -- Je remplace les variables par des points d\'interrogation
                                    WHERE login= ? AND password = ?');
            // J'execute ma requête et je passe en paramètre un tableau qui contient les variables corresondant
            // au ? dans la requête préparée
            $requete->execute(array($login, $password));

            while($données = $requete -> fetch()){
                echo '<p>' . $données["login"] . " / " . $données["password"] . '</p>';
            }
    }
?>
<!-- Partie 03 -->
<h2>Crypter ses données</h2>

<?php/*
    $mdp1 = "Conquistador";
    $mdp2 = "Revelation";

    $mdpMd5 = md5($mdp1);
    $mdpSha1 = sha1($mdp2);

    echo "<h4> $mdp1 en hash md5 devient: $mdpMd5</h4>;
    <h4>$mdp2 en hash sha1 devient: $mdpSha1</h4>";*/
?>

<h2>mise en place du grain de sel</h2>

<?php
    // Je crée une fonction qui va générer une chaine de caratère aléatoire
    function grainDeSel($x){
        // Je crée une variable contenant tous les caractère permis en sha1
        $chars = '0123456789abcdef';
        // Une variable string pour acceuillir le résultat de ce random
        $string = '';
        // Je crée une boucle qui va choisir aléatoirement une série de x caractère, 
        // le x étant le paramètre de ma fonction qui sera lui aussi généré aléatoirement
        for($i = 0; $i < $x; $i++){
            $string .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $string;
    }

    // Je teste ma fonction

    echo '<h3> grain de sel généré aléatoirment: '. grainDeSel(rand(5,10)) . '</h3>';

    // utilisation pratique
    $mdp3 = "fouDuCode";
    $mdp3Sha1 = sha1($mdp3);
    $sel = grainDeSel(rand(5,15));

    $mdp3Sha1Sel = $sel . $mdp3Sha1;

    echo '<p>Mot mot de passe en clair est :' . $mdp3 . '</p>
          <p>,Mon mot de passe hashé est: ' . $mdp3Sha1 . ',</p>
           <p>Mon grain de sel est: ' . $sel . '</p>
           <p>Mon mot de passe salé est: ' . $mdp3Sha1Sel . '</p>';
?>

<!-- <h2>Lorsque j'enregistre un utilisateur, je prends soin d'envoyer la chaine générée aléatoirement dans ma base de données, pour que je puisse reproduire le hash du mot de passe</h2> -->



