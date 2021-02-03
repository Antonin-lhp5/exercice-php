<?php

function cafetiere($nombre1 = 2, $nombre2 = 2, $nombre3 = 2)
{

    return $nombre1 + $nombre2 + $nombre3;
}

/**
 * function permettant d'afficher un message de bienvenue au nouveau joueur 
 * 
 * @param string $nom on récupère le nom du personnage
 * @param string $prenom on récupère le prénom du personnage
 * @param string $classe on récupère la classe du personnage, par défaut ce sera un paysan
 * 
 * @return string return la phrase bienvenue 
 */
function creerPersonnage($nom, $prenom, $classe = 'paysan')
{
    return "Bienvenue dans le jeu $nom $prenom, vous êtes de la classe $classe";
}
?>

<!doctype html>
<html lang="fr">

<head>
    <title>exo3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1><?=

            creerPersonnage('LOUVEL', 'Céline', 'assassin');

        ?></h1>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>