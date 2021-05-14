<?php 
    $titre = "Exemple 015 - Manipuler les données d'une table - Partie 2";
    require "../common/template.php"; 

    // Variable de connexion à la BD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>

<!-- JOINTURE INTERNE -->
<?php
    $requete = $bdd->query('SELECT s.section_name AS "Nom de la section", 
                                   CONCAT (st.first_name, " ", st.last_name) AS "Délégué de Classe"
                            FROM section s
                            INNER JOIN student st ON student_id = delegate_id') 
                            or die(print_r($bdd->errorinfo()));  
                            
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
                <td>Nom de la section</td>
                <td>Nom du délégué</td>
            </tr>
            <?php 
            // Boucle While pour traiter et afficher les données
            while($données = $requete->fetch()){
                echo '
                    <tr>
                        <td>' . $données["Nom de la section"] . '</td>
                        <td>' . $données["Délégué de Classe"] . '</td>
                    </tr>';
            };?>
        </tbody>
    </table>

    <!-- JOINTURE EXTERNE -->
<?php
    $requete = $bdd->query('SELECT s.section_name AS "Nom de la section", 
                                    CONCAT (p.professor_name, " ", p.professor_surname) AS "Nom du professeur", 
                                    CONCAT (st.first_name, " ", st.last_name) AS "Délégué de Classe"
                            FROM section s
                            LEFT JOIN professor p ON s.section_id = p.section_id
                            INNER JOIN student st ON student_id = delegate_id
                            ');
?>

<table class='table table-success table-striped w-50'>
        <thead>
            <tr>
                <th colspan="3" style="text-align: center">Liste des sections</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nom de la section</td>
                <td>Nom du professeur</td>
                <td>Nom du délégué</td>
            </tr>
            <?php 
            // Boucle While pour traiter et afficher les données
            while($données = $requete->fetch()){
                echo '
                    <tr>
                        <td>' . $données["Nom de la section"] . '</td>
                        <td>' . $données["Nom du professeur"] . '</td>
                        <td>' . $données["Délégué de Classe"] . '</td>
                    </tr>';
            };?>
        </tbody>
    </table>

<!-- PARTIE 02 -->
 <?php
        $requete = $bdd->exec('INSERT INTO curse(course_id, course_name, course_ects, professor_id)
                                VALUES("EINGN2289", "Web Developpement", 5.5, 6)')
                                or die(print_r($bdd->errorInfo()));    

        $requete = $bdd->exec('INSERT INTO student(first_name, last_name, birth_date, login, section_id, year_result, cours_id)
                                VALUES("first_name", "last_name", "section_id", "year_result", "cours_id")')
                                or die(print_r($bdd->errorInfo()));
    ?> 

    <h3>Je continue la construction de ma page en html</h3>