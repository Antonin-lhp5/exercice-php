<?php

setlocale(LC_TIME, "fr_FR");

$monthsArray = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];

$startIntYears = 2015;
$endIntYears = 2025;

$weekArray = [
    1 => 'lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche',
];

// il faut déterminer le premier jour du mois ex: le 1er janvier 2021 tombe un vendredi
// il faut calculer le nombre de jour dans le mois
// il faut calculer le nombre de case du calendrier ex: pour janvier 2021 il y a 35 case
// il faut dessiner un tableau avec le Thead qui aura Lundi, Mardi, Mercredi, Jeudi, Vendredi


if (isset($_GET['open'])) {
    $months = $_GET["selectedMonth"];
    $years = $_GET["selectedYear"];
    $numbersDays = cal_days_in_month(CAL_GREGORIAN, $months, $years);
    $firstDay = strftime("%u", mktime(0, 0, 0, $months, 1, $years));
} else {
    $numbersDays = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
    $firstDay = strftime('%u', time());
}




?>
<!doctype html>
<html lang="fr">

<head>
    <title>TP partie 9 php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="h-screen flex flex-col justify-center text-center mx-auto bg-gray-900">

    <form class="flex justify-center" action="index.php" method="GET">
        <div class="">
            <h1 class="text-4xl font-extrabold text-gray-100 pb-5">Calendrier d'Antonin</h1>

            <div class="flex flex-wrap space-x-4 justify-center py-10">
                <select class="w-40 h-10 pl-3 text-base placeholder-gray-600 border-2 border-pink-500 rounded-lg appearance-none focus:shadow-outline" name="selectedMonth">
                    <option selected>Mois</option>
                    <?php
                    foreach ($monthsArray as $key => $value) { ?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
                <select class="w-40 h-10 pl-3 text-base placeholder-gray-600 border-2 border-yellow-500 rounded-lg appearance-none focus:shadow-outline" name="selectedYear">
                    <option selected>Année</option>
                    <?php
                    for ($startIntYears; $startIntYears <= $endIntYears; $startIntYears++) { ?>
                        <option><?= $startIntYears ?></option>
                    <?php } ?>
                </select>
                <input class="w-40 h-10 text-center bg-pink-500 text-bold text-white" type="submit" value="Afficher" name="open">
            </div>

    </form>

    <!-- Calendrier -->
    <table class="table text-white text-lg table-auto text-center">
        <thead>
            <tr>
                <?php
                foreach ($weekArray as $key => $value) { ?>
                    <th class="w-40"><?= $value ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
        <tbody>

            <?php
            $currentDay = 1;
            for ($case = 1; $case <= ($numbersDays + $firstDay) - 1; $case++) {
                if ($case % 7 == 1) {
            ?>
                    <tr>
                    <?php
                }
                if ($case >= $firstDay) {
                    ?>
                        <td>
                            <?= $currentDay ?>
                        </td>
                    <?php
                    $currentDay++;
                } else {
                    ?>
                        <td class=""></td>
                    <?php
                }
                if ($case % 7 == 0) {
                    ?>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
        </tbody>
    </table>

    </div>

    </div>

</body>

</html>