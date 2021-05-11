<?php 
    $titre = "Afficher dossier";
    require "../../common/template.php"; 

    // J'encapsule le chemin de mon dossier dans une variable
    $dir = "./uploads";

    // dans la variable $fichiers, j'effectue le scan de mon dossier upload
    $fichiers = scandir($dir);
    // Si je regarde le contenu de ce que j'ai récupéré, je remarque les deux entrées parasites
    // que je vais devoir éliminer lors de mon affichage
?>
<style>
    .miseEnPage{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .image{
        width: 10rem;
        margin: 1rem;
        padding: 0.5rem;
        border: solid 1px black;
    }
    .image > a > img{
        width: 100%;
        height: 10rem;
        box-shadow: 0px 10px 13px -7px #000000, -6px -3px 4px 5px rgba(0,0,0,0);
        margin-bottom: 1rem;
    }

    .image > a > p{
        text-align: center;
    }
</style>
<div class="miseEnPage">
    <?php 
        // Je parcours ma variable $fichiers et affiche chaque fichier présent
        foreach($fichiers as $values){
            if($values != "." && $values != ".."){
                // je retire les 10 première lettre du nom du fichier qui ont été générée
                // aléatoirement par ma fonction time()
                $name = substr($values, 10);
                // J'affiche le contenu lié à l'itération de la boucle
                echo '
                    <div class="image">
                        <a href="./uploads/' . $values . '">
                        <img src="./uploads/' . $values . '" alt="' . $values . '" />
                        <p>' . $name . ' </p></a>
                        
                    </div>
                ';
            }
        }
    ?>
</div>
