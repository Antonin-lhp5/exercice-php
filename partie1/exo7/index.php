<?php

$lastname = 'bastide';
$firstname = 'antonin';
$age = 24;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7</title>
</head>

<body>


    <p>Bonjour <?= $lastname ?> <?= $firstname ?>, tu as <?= $age ?> ans.</p>

    <?php 

    echo 'Bonjour ' . $lastname .  ' ' . $firstname . ' tu as ' . $age . ' ans. <br><br>';
    echo "Bonjour $lastname $firstname tu as $age ans."; 
    
    ?>


</body>

</html>