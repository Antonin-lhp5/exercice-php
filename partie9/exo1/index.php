<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Exo1</title>
</head>

<body class="h-screen flex items-center justify-center bg-gray-900">

    <div>
     <p class="flex text-white">
     <?= date('d/m/Y')?> <br>
     <?= date('d-m-y')?> <br>
     <?= date('l d M Y')?> <br>
     <?php // setlocale(LC_TIME, ['fr']); echo stfrtime('%A %D %M %Y')?> <br>
     <p>
    </div>

</body>

</html>