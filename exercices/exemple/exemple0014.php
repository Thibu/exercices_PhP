<?php 
    $titre = "Exemple 014 - Manipuler les données d'une table partie 1";
    require "../common/template.php"; 

    // Variable de connexion à la BD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }

    // Rajouter manuellement une nouvelle section
    $requete = $bdd->exec('INSERT INTO section(section_id, section_name, delegate_id)
                            VALUES(1410, "WBd Developpement", 8)');

    // Modifier une donnée
    $requete = $bdd->exec('UPDATE section SET delegate_id="25"
                            WHERE section_id="1410"');

    // Supprimer des données
     $requete = $bdd->exec('DELETE FROM section WHERE section_id="1410"');
?>

<!-- AFFICHER TABLE SECTION -->
    <table class='table table-success table-striped w-50'>
        <thead>
            <tr>
                <th colspan="3" style="text-align: center">Liste des sections</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Section ID</td>
                <td>Section Name</td>
                <td>Delegate ID</td>
            </tr>
            <?php 
            $requete = $bdd->query('SELECT * FROM section');
            // Boucle While pour traiter et afficher les données
            while($données = $requete->fetch()){
                echo '
                    <tr>
                        <td>' . $données["section_id"] . '</td>
                        <td>' . $données["section_name"] . '</td>
                        <td>' . $données["delegate_id"] . '</td>
                    </tr>';
            };?>
        </tbody>
    </table>







