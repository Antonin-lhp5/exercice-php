<?php require_once "controllers/gallery_controller.php";

?>

<!doctype html>
<html lang="fr">

<head>
    <title>vaisseaux star wars</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container mx-auto col-8">
        <div>
            <h1>Gallerie de vaisseaux star wars</h1>
            <a type="button" href="index.php" class="btn btn-outline-success mb-2">Accueil</a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>
            <?php foreach ($sw_data as $key => $value) { ?>
                <div class="col">
                    <div class="card">
                        <img class="img-description" src="<?= $value["image"] ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>