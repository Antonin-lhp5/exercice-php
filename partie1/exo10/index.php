<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 10</title>
</head>
<body>

    <?php 
    
    $isEasy = true; 

    
    if ($isEasy){
        echo "C'est facile";
    } else {
        echo "c'est difficile";
    }
    
    ?>

    <!-- ÉCRITURE DE LA CONDITION SOUS FORME DE TERNAIRE -->

    <?php 
    
    echo ($isEasy == false) ? "c'est facile" : "c'est difficile";
    
    
    ?>

</body>
</html>