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

    echo "******************EXO11*******************";

    $a = 2;
    $b = 7;
    $c = 6;
    $moinsb = -abs($b);
    function calculdelta($a, $b, $c, $moinsb){
    

        $delta = ($b*$b) - (4 * $a * $c);
        
        if ($delta < 0){
            echo "<p>Pas de solutions</p>";
        }
        if($delta == 0){
            $x = ($moinsb)/(2*$a);
            echo "<p>Une seule solution : $x</p>" ;
        }
        if($delta > 0){
            $racinea = ($moinsb -sqrt($delta))/(2*$a);
            $racineb = ($moinsb + sqrt($delta))/(2*$a);
            echo "<p>Il y a deux solutions qui sont X1 : $racinea et X2 : $racineb </p>";
        }
        
        return $delta;
    }

    $delta = calculdelta($a, $b, $c, $moinsb);

    echo "*******************EXO12************************";

    $tab1 = [
        'prenom' => 'Thibaut',
        'age' => 25,
        'sexe' => 'M'
    ];
    
    $tab2 = [
        'prenom' => 'Celia',
        'age' => 21,
        'sexe' => 'F'
    ];

    function affichage($x){

        echo '<p>Prenom :' .$x['prenom']. ' </p>';
        echo '<p>Age :' .$x['age']. ' </p>';
        echo '<p>Sexe :' .$x['sexe']. ' </p>';

    }

    affichage($tab1);
    echo "***********";
    affichage($tab2);

    echo "*******************EXO13************************";


    $guy = [
        'prenom' => 'guy',
        'age' => 42,
        'sexe' => 'M'
    ];
    
    $delphine = [
        'prenom' => 'delphine',
        'age' => 39,
        'sexe' => 'F'
    ];
    $marc = [
        'prenom' => 'marc',
        'age' => 25,
        'sexe' => 'M'
    ];
    
    $mathilde = [
        'prenom' => 'mathilde',
        'age' => 21,
        'sexe' => 'F'
    ];

    $tab = [
        $guy,
        $delphine,
        $marc,
        $mathilde,
    ];

    foreach($tab as $value){
        affichage($value);
        echo "********";

    }
    
    echo "***************EXO14*****************"






    ?>
</body>
</html>