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

        for($i=1; $i <= 10; $i++){

            echo "<p>Etape : $i - resultat = </p>";



        }




    ?>
</body>
</html>