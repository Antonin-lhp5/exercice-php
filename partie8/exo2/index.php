<?php
session_start();
$_SESSION['lastname'] = 'john';
$_SESSION['firstname'] = 'Marcel';
$_SESSION['age'] = 18;


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
<a href="index.php">index</a>
<a href="page2.php">page</a>    
</body>
</html>