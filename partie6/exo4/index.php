<?php

var_dump($_GET); // Nom du tableau : $_GET


// Ici on check language
if (isset($_GET['language'])) {
  $language = $_GET['language'];
} else {
  $language = "Aucun langage identifié";
}

// Ici on check server
if (isset($_GET['server'])) {
  $server = $_GET['server'];
} else {
  $server = "Aucun serveur localisé";
}
?>

<!doctype html>
<html lang="Fr">

<head>
  <title>Partie 6 - Exercice 1 et 2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center mt-5">
    <a class="btn btn-primary" href="index.php?language=PHP&server=WAMP" role="button">Paramètres du site</a>
    <a class="btn btn-success" href="index.php" role="button">Retour INDEX</a>
  </div>

  <div class="container text-center mt-5 text-center">
    <!-- Ajout pour exo 3 -->
    <p><b>Langage utilisé</b> : <?php echo $language ?></p>
    <p><b>Serveur utilisé</b> : <?php echo $server ?></p>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>