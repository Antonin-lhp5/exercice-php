<?php require_once "controllers/index_controller.php";



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
            <h1>Vaisseaux star wars</h1>
            <a type="button" href="gallery.php" class="btn btn-outline-success mb-2">Galerie</a>

        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Vignette</th>
                    <th>Nom</th>
                    <th>Info</th>
                </tr>
            </thead>
            <?php foreach ($sw_data as $key => $value) { ?>
                <tbody>
                    <tr>
                        <td><img src="<?php echo $value["image"] ?>" class="img-thumbnail vignette"></td>
                        <td><?php echo $value["name"] ?></td>
                        <td><button class="btn btn-info fw-bold text-white" data-bs-toggle="modal" data-bs-target="#vaisseau<?php echo $key ?>">Info</button></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <!-- Modal -->
    <?php foreach ($sw_data as $key => $value) { ?>
        <div class="modal fade" id="vaisseau<?php echo $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6><?php echo $value["name"] ?></h6>
                        <div>Taille : <span><?php echo $value["size"] ?></span></div>
                        <div>Poid : <span><?php echo $value["weight"] ?></span></div>
                        <div>Armement : <span><?php echo $value["arsenal"] ?></span></div>
                        <div>Astronaute : <span><?php echo $value["astromechDroid"] ?></span></div>
                        <img class="img-description mt-3" src="<?php echo $value["image"] ?>" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>