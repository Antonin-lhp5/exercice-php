<?php

setlocale(LC_TIME, "fr_FR");

// EXO 5
$nbr1 = strtotime("now");
$nbr2 = strtotime("16 May 2016");
$result = $nbr1 - $nbr2;
$nbrdays = $result / 86400;
// nombre secondes dans la journée

// EXO 6
$numberDaysOfMonth = cal_days_in_month(CAL_GREGORIAN, 2, 2016);

// EXO 7 et 8
$startDate1 = "2021-01-06";
$endDate1 = date("d/m/y", strtotime($startDate1 . "+20 days"));

$endDate2 = date("d/m/y", strtotime("-22 days"));

?>

<!doctype html>
<html lang="fr">
<head>
	<title>Partie 9</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="pl-3 pt-3">
	
<!-- EXO 1 -->
	<p>Bonjour, nous sommes aujourd'hui le <span class="font-weight-bold"><?= date("d/m/y")?></span>.</p>

<!-- EXO 2 -->
	<p>Bonjour, nous sommes aujourd'hui le <span class="font-weight-bold"><?= date("d-m-y")?></span>.</p>

<!-- EXO 3 -->
	<p>Bonjour, nous sommes aujourd'hui le <span class="font-weight-bold"><?= strftime("%A %d %B %G")?></span>.</p>

<!-- EXO 4 -->
	<p>Bonjour, depuis le 1er janvier 1970, il s'est écoulé <span class="font-weight-bold"><?= time() ?></span> secondes.</p>

	<p>Bonjour, le timestamp du mardi 2 août 2016 à 15H00 est de <span class="font-weight-bold"><?= mktime(15, 0, 0, 8, 2, 2016) ?></span> secondes.</p>

<!-- EXO 5 -->
	<p>Bonjour, depuis le 16 mai 2016, il s'est écoulé <span class="font-weight-bold"><?= floor($nbrdays) ?></span> jours.</p>

<!-- EXO 6 -->
	<p>Bonjour, le mois de février 2016 comprenait <span class="font-weight-bold"><?= $numberDaysOfMonth ?></span> jours.</p>

<!-- EXO 7 -->
	<p>Bonjour, dans 20 jours nous serons le <span class="font-weight-bold"><?= $endDate1 ?></span>.</p>

<!-- EXO 8 -->
	<p>Bonjour, il y a 22 jours nous étions le <span class="font-weight-bold"><?= $endDate2 ?></span>.</p>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>