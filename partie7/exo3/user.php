<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"])){
    if(preg_match("/^[a-zA-Z]+$/", $_POST["firstname"])){
        $firstname = htmlspecialchars($_POST["firstname"]);
    } else {
        $messageErrorFirstname = "Veuillez renseigner correctement le champ";
    }
    if(preg_match("/^[a-zA-Z]+$/", $_POST["lastname"])){
        $lastname = htmlspecialchars($_POST["lastname"]);
    } else {
        $messageErrorLastname = "Veuillez renseigner correctement le champ";
    }
} else {
    $firstname = "Non défini";
    $lastname = "Non défini";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Votre prénom est : <?= $firstname ?></p>
<p>Votre nom de famille est : <?= $lastname ?></p>
</body>
</html>