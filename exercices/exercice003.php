<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <table border>
        <tr>
            <th>Nombre</th>
            <th>Racine</th>
            <th>Racine</th>
        </tr>
        <?php
            $cond ="true";
            for($i=1; $i <= 20; $i++){
                
                $valcarre = $i * $i;
                $racine = sqrt($i);
                do{
                    echo 
                        "<tr>
                            <td>$i</td>
                            <td>$valcarre</td>
                            <td>$racine</td>
                        </tr>";
                } while(!true);
            }
        ?>
    </table>

    <?php echo "<p>*****************************************</p>";?>
    
    <?php
        $rand = rand(5,15);
        $resultat = $rand;
        print_r($rand);
        
        for($i=1; $i <= $rand; $i++){
            
                $resultat = $resultat + $i;
            echo "<p>Etape : $i - resultat = $resultat </p>";

        }
    ?>

    <?php echo "<p>*****************************************</p>";?>

    <?php
    $i=0;

    do {
    $i++;
    $random = rand(1,20);
    if($random <=15){
        echo"<p> Essais $i : $random est trop petit (<16)</p>";
    }else{
        echo"<p>Le nombre choisi est : $random";
    }
        } while ($random <= 15);
    ?>

    <?php echo "<p>*****************************************</p>";?>

    <?php
        $moyenne = 0;
        $j = 0;
        $noteDeGuy = [];
        for($i=0; $i<20;$i++){
            $randominou = rand(0,20);
            $noteDeGuy[] = $randominou;
            $j = $j+1;
            echo "<p>note n° $j : $noteDeGuy[$i] </p>";
        }
        $moyenne = array_sum($noteDeGuy)/count($noteDeGuy)*5;
        if($moyenne >= 0 && $moyenne < 30){
            echo "La moyenne de l'année est de $moyenne% : Ca ira mieux l'année prochaine !!";
        }elseif($moyenne >= 30 && $moyenne < 50){
            echo "La moyenne de l'année est de $moyenne% : Voila pourquoi il ne faut pas regarder des stream JV durant les cours !";
        }elseif($moyenne >= 50 && $moyenne < 60){
            echo "La moyenne de l'année est de $moyenne% : Pas de bol, t'y était presque !!";
        }elseif($moyenne >= 60 && $moyenne < 70){
            echo "La moyenne de l'année est de $moyenne% : ça passe... sans classe, mais ça passe !!!";
        }elseif($moyenne >= 70 && $moyenne < 80){
            echo "La moyenne de l'année est de $moyenne% : Bien ouej', objectif atteint !!";
        }elseif($moyenne >= 80 && $moyenne < 100){
            echo "La moyenne de l'année est de $moyenne% : Master Class, 5étoiles pour toi";
        }
    ?>
</body>
</html>