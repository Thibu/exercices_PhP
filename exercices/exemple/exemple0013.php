<style>
    .tableau{
        display: flex;
    }
</style>

<?php 
    $titre = "Exemple 013 - Communiquer avec une base de données";
    require "../common/template.php"; 

    // PARTIE01

    // Variable de connexion à la BD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    // PARTIE 02
    // Requete vers la bdd
    $requete = $bdd->query('select * from student');
    // vérifier contenu de requête
    // var_dump($requete);

    $studentArray = [];
    // Traitement des données
    while($données = $requete->fetch()){
        $studentArray[] = [$données['first_name'], $données['last_name'], $données['section_id']];
    }

    // var_dump($studentArray);
?>

<div class="tableau">
<!-- deux possibilité pour utiliser les données
1° Après avoir encapsulé les données dans une variable ($studentArray ci-dessus) -->
    <table class='table table-success table-striped w-50'>
        <thead>
            <tr>
                <th colspan="3" style="text-align: center">Liste des éléves</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Section</td>
            </tr>
            <?php 
            // Boucle foreach pour parcourir mon tableau
            foreach($studentArray as $value){
                echo '<tr>
                    <td>' . $value[0] . '</td>
                    <td>' . $value[1] . '</td>
                    <td>' . $value[2] . '</td>
                </tr>';
            }
        ?>
        </tbody>
    </table>
    <!-- 2° en faisant directement le traitement avec fetch()-->
    <?php 
    // Nouvelle requête pour récupérer les profs
        $requeteProf = $bdd->query('SELECT * FROM professor');
    ?>
    <table class='table table-dark w-50'>
        <thead>
            <tr>
                <th colspan="3" style="text-align: center">Liste des professeurs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Section</td>
            </tr>
            <?php 
            // Boucle While pour traiter et afficher les données
            while($données = $requeteProf->fetch()){
                echo '
                    <tr>
                        <td>' . $données["professor_surname"] . '</td>
                        <td>' . $données["professor_name"] . '</td>
                        <td>' . $données["section_id"] . '</td>
                    </tr>';
            };?>
        </tbody>
    </table>
</div>
<?php
    // Je ferme la connexion à ma bd avec
    $requete->closeCursor();
?>

</table>

