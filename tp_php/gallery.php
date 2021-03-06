<?php

    $MonRepertoire = "photos"; //Répertoire contenant
    $scanRepertoire =  scandir($MonRepertoire); //scan le répertoire et met les fichier qu'il y trouve dedans
    $nbreImg = count($scanRepertoire)-2;

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Gallery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">



        <h1 class="pb-3">Gallerie d'images <span class="badge badge-dark"><?php echo $nbreImg; ?></span></h1>

        <div class="card-columns">

            <?php

            $liste_rep = scandir("./photos");

            $i = 2;
            $num = count($liste_rep);

            while ($i < $num) { ?>

                <div class="card">
                    <img src="photos/<?php echo $liste_rep[$i] ?>" class="card-img-top" alt="...">
                </div>

            <?php $i++;
            }

            ?>





        </div>

        <a type="button" href="index.php" class="btn btn-dark mt-2 mb-3">Retour</a>
        
       

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>