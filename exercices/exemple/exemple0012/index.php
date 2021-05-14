<?php 
    $titre = "Exemple 0012 - recevoir un fichier";
    $sousSite = "../..";
    require "../../common/template.php"; 
// PARTIE 02
    if(is_uploaded_file($_FILES["fichier"]["tmp_name"])){
        var_dump($_FILES["fichier"]);
        echo '<p>Emplacement temporaire du fichier: ' . $_FILES["fichier"]["tmp_name"] . '</p>
        <p>Nom du fichier: ' . $_FILES["fichier"]["name"] . '</p>
        <p>Type de fichier: ' . $_FILES["fichier"]["size"] . '</p>
        <p>Image reçue sur le serveur: ' . $_FILES["fichier"]["error"] . '</p>';
    }

    //PARTIE 003
    //traitement d'un upload de type classique
    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){
        // Vérifier la taille du fichier recu (1M = 1000000o)
        if($_FILES["fichier"]["size"] <= 10000000){
            // Je crée un tableau qui va contenir les extensions de fichier que je vais autoriser
            // a uploader dans mon application
            $extensionArray = ["png", "gif", "jpg", "JPEG", "jfif", "jpeg"];

            // Je vais repertorier toutes les informations du fichier grâce à la fonction pathinfo()
            // qui aura pour paramètres le nom de notre fichier:
            $infoFichier = pathinfo($_FILES["fichier"]["name"]);
            var_dump($infoFichier);

            // Je récupére l'extension du fichier qui a été envoyé
            $extensionImage = $infoFichier["extension"];
            var_dump($extensionImage);

            // Je vérifie si l'extension du fichier envoyé est une extension autorisée
            // par mon application
            if(in_array($extensionImage, $extensionArray)){
                // Je crée une variable qui contiendra la chaîne de caractère du repertoire dans lequel l'upload
                // sera enregistré, je personnalise le nom de mon fichier pour éviter un doublon
                $destination = "uploads/" . time() . basename($_FILES["fichier"]["name"]);
                move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
                echo "<h3>Envoi du fichier " . $_FILES["fichier"]["name"] . " réussi !!!";
            }
        }
    }
    ?>

<!-- PARTIE 01 -->
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <table>
            <tr>
                <td><input type="file" name="fichier"></td>
            </tr>
            <tr>
                <td><input type="submit" /></td>
            </tr>

        </table>
    </form>

