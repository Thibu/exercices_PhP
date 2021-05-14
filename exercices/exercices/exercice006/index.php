<?php 
    $titre = "Exercice Série 006 - Hebergeur d'image en local";
    require "../../common/template.php"; 
    ?>

<link rel="stylesheet" href="style.css">
<?php 
    // $titre = "Exemple 0012 - recevoir un fichier";
    // $sousSite = "../..";
    // require "../../common/template.php"; 
    // PARTIE 02

    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){

        if($_FILES["fichier"]["size"] <= 10000000){

            $extensionArray = ["png", "gif", "jpg", "JPEG", "jfif", "jpeg"];

            $infoFichier = pathinfo($_FILES["fichier"]["name"]);


            $extensionImage = $infoFichier["extension"];

            if(in_array($extensionImage, $extensionArray)){

                $destination = "uploads/" . time() . basename($_FILES["fichier"]["name"]);
                move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
                echo "<h3>Envoi du fichier " . $_FILES["fichier"]["name"] . " réussi.";
            }
        }
    }
?>

<section class="container_form">
    <div class="div_form">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            <table>
                <tr>
                    <td><input type="file" name="fichier"></td>
                </tr>
                <tr>
                    <td><input type="submit"/></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="div_img">
        <?php
        echo '<img class="upload_img" src="'.$destination.'">';
        ?>
    </div>
</section>
    <div id="container_img">
        <?php
        $dirname = "uploads/";
        $images = glob($dirname."*");
    
        foreach($images as $image) {
        echo '<img class="images" src="'.$image.'" />';
        }
        ?>
    </div>

