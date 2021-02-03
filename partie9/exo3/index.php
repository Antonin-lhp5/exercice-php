<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Exo2</title>
</head>

<body class="h-screen flex items-center justify-center bg-gray-900">

    <div>
        <p class="flex text-white">
            <?php
            echo "Il s'est écoulé " . time() . " secondes depuis le 1er Janvier 1970";
            ?>
    </div>

</body>

</html>