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

$daysArray = [
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche'
];

$startIntYears = 2015;
$endIntYears = 2025;

$months = $_GET["selectedMonth"];
$years = $_GET["selectedYear"];

$numbersDays = cal_days_in_month(CAL_GREGORIAN, $months, $years);
var_dump($numbersDays);
$firstDay = strftime("%u", mktime(0, 0, 0, $months, 1, $years));
var_dump($firstDay);


?>
<!doctype html>
<html lang="fr">

<head>
    <title>TP_Calendar_PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <p class="titleCalendar">Calendrier 2015 - 2025</p>
    
    <form action="index.php" method="GET">
    <div id="calendar">
        <select class="form-select" name="selectedMonth">
            <option selected>Sélectionner votre mois</option>
                <?php
                    foreach($monthsArray as $key => $value){?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
        </select>
        <select class="form-select" name="selectedYear">
            <option selected>Sélectionner votre année</option>
                <?php 
                    for($startIntYears; $startIntYears <= $endIntYears; $startIntYears++){?>
                    <option><?= $startIntYears ?></option>
                <?php } ?>
        </select>
            <input type="submit" value="Afficher" class="buttonAffichage">
            <input type="button" value="Retour" class="buttonRetour">
        </div>

    </form>

<table class="table">
    <thead>
        <tr>
            <?php
            foreach($daysArray as $key => $value){?>
            <th value="<?= $key ?>"><?= $value ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                $currentDay = 1;
                for($case = 1; $case <= ($numbersDays + $firstDay) - 1; $case++){
                    if($case >= $firstDay){?>
                        <td>
                            <?= $currentDay ?>
                        </td>
                    <?php
                        $currentDay++;
                    } else {
                    ?>
                    <td></td>
                    <?php
                    }
                }
            ?>
        </tr>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

//Bêêêêê bêêêê ! 


