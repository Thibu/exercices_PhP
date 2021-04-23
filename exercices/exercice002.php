<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>*************************************************</p>";

        $nbrandom = rand(1, 20);

        echo "<h3>Nombre tiré au sort : $nbrandom</h3>";

        if($nbrandom >= 1 && $nbrandom <= 5){
            echo "<p> Il est compris entre 1 et 5 </p>";
        } elseif ($nbrandom >= 6 && $nbrandom <= 10) {
            echo "<p> Il est compris entre 6 et 10 </p>";
        } elseif ($nbrandom >= 11 && $nbrandom <= 15) {
            echo "<p> Il est compris entre 11 et 15 </p>";
        } elseif ($nbrandom >= 16 && $nbrandom <= 20) {
            echo "<p> Il est compris entre 16 et 20 </p>";
        }

        echo "<p>*************************************************</p>";

        $nbrandom1 = rand(1,100);
        $nbrandom1et2 = rand(1,100);

        $nbres = abs($nbrandom1 - $nbrandom1et2);

        echo "<p>Nombre 1 : $nbrandom1</p>";
        echo "<p>Nombre 2 : $nbrandom1et2</p>";

        echo "<p>Valeur absolue : $nbres</p>";

        if ($nbres >= 25 && $nbres <= 75){
            echo "<p>La valeur absolue de $nbrandom1 - $nbrandom1et2 est comprise entre 25 et 75</p>";
        } else {
            echo "<p>La valeur absolue de $nbrandom1 - $nbrandom1et2 n'est pas comprise entre 25 et 75</p>";
        }
        
        echo "<p>*************************************************</p>";
        
        $nbrandom2 = rand(1, 12);

        $tableau = ["Janvier","Fevrier","Mars","Avil","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];

        switch($nbrandom2)
        {
            case 1 : 
               echo "<p>Le mois $nbrandom2 correspond au mois $tableau[0]</p>";
            break;
            case 2 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[1]</p>";
            break;
            case 3 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[2]</p>";
            break;
            case 4 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[3]</p>";
            break;
            case 5 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[4]</p>";
            break;
            case 6 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[5]</p>";
            break;
            case 7 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[6]</p>";
            break;
            case 8 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[7]</p>";
            break;
            case 9 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[8]</p>";
            break;
            case 10 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[9]</p>";
            break;
            case 11 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[10]</p>";
            break;
            case 12 : 
                echo "<p>Le mois $nbrandom2 correspond au mois $tableau[11]</p>";
            break;
        }

    ?>






</body>
</html>