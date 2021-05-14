<?php 
    $titre = "Exercice Série 005 - Les formulaires 1/2";
    require "../common/template.php"; 
    ?>

<section>
<style>
    section{
        display: flex;
    }
    .contenu{
        border: 1px solid black;
        margin: 1rem;
        padding: 1.5rem;
    }
    button{
        margin-top: 1.5rem;
        background-color: blue;
        color: white;
    }
</style>
    <div class="contenu">
    <?php
        if(isset($_GET["prenom"]) && isset($_GET["age"])){
            $getnom = htmlspecialchars($_GET["prenom"]);
            $getage = htmlspecialchars($_GET["age"]);
            echo "<p>Bonjour " . $getnom . ", tu as " . $getage . " ans</p>
            <p> cette section a été générée par la méthode GET</p>";
        }
    ?>
        <form method="get" action="">
                <table>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>âge:</td>
                        <td><input type="text" name="age" /></td>
                    </tr>
                </table>
                <button type="submit">Envoyer</button>
        </form>
    </div>
    <div class="contenu">
    <?php
        if(isset($_POST["prenom"]) && isset($_POST["age"])){
            $postNom = htmlspecialchars($_POST["prenom"]);
            $postAge = htmlspecialchars($_POST["age"]);
            echo "<p>Bonjour " . $postNom . ", tu as " . $postAge . " ans</p>
            <p> cette section a été générée par la méthode POST</p>";
        }
    ?>
        <form method="post" action="">
                <table>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>âge:</td>
                        <td><input type="text" name="age" /></td>
                    </tr>
                </table>
                <button type="submit">Envoyer</button>
        </form>
    </div>

</section>