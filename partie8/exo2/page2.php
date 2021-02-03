<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    
<h1>Bonjour <?php echo $_SESSION['lastname'] ?> <?php echo $_SESSION['firstname'] ?> vous avez <?php  echo $_SESSION['age'] ?> ans</h1>

<a href="index.php">index</a>
<a href="page2.php">page</a>

</body>
</html>