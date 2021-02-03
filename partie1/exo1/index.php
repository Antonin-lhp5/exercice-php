<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php n1</title>
</head>
<body>

<h1>Hello world !</h1>

<?php 
    $name = "Pierre";
    $firstname = "Pierre";
    $age = 28;
?>

<!-- echo normal  -->
<h1> <?php 
    echo $name;
    echo $firstname;
    echo $age;
?></h1>

<!-- echo court -->
<h3><?= $age ?></h3>

    
</body>
</html>