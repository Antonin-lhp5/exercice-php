<?php
require_once 'controller.php';


if (isset($_GET["page"])) {
    $recupGet = $_GET["page"];
    $menu = intval($recupGet);
} else {
    $menu = 0;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP xml</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a type="submit" class="nav-link active" aria-current="page" href="?page=0">
                            <?php echo $XML->page[0]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=1"><?php echo $XML->page[1]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=2"><?php echo $XML->page[2]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=3"><?php echo $XML->page[3]->menu; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <?php
    echo $XML->page[$menu]->content;

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>