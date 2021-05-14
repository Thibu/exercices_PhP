<?php 
    $titre = "Exemple 011 - Envoyer un fichier";
    require "../common/template.php"; 
    
    
    // Vérifier si un formulaire à déjà été envoyé
    if(isset($_POST["nom"]) && isset($_POST["prenom"])){

        echo "Bonjour " . $_POST["nom"] . " " . $_POST["prenom"] . ", comment vas-tu ? ";

    }
    else
    {
        ?>

        <form method="post" action="exemple0011.php">
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

<!-- Fermeture de mon else -->
<?php
    }
?>