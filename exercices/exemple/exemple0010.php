<?php 
    $titre = "Exemple 010 - Traiter un formulaire";
    require "../common/template.php" 
    ?>
<div class="principal">
<!-- PARTIE 02 -->

    <?php
        if(isset($_POST["prenom"]) && isset($_POST["nom"])):
            echo "<p>Bonjour " . $_POST["nom"] . " " . $_POST["prenom"] . "!!!</p>";
        endif;
    ?>

<!-- PARTIE 03 -->

<?php
    if(isset($_POST["prenom"]) && isset($_POST["nom"])){
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);

        echo "<h4>Version saine</h2>
            <p>Bonjour $nom $prenom.</p>";
    }
?>

<!-- PARTIE 01 -->
    <form method="post" action="exemple0010.php">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" /></td>
            </tr>
        </table>
        <button type="submit">Envoyer</button>
    </form>

