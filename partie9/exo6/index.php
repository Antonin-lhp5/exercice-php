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
            
     function jourdansmois($mois , $an){
        $enmois = $an*12 + $mois; 
         if (($enmois > 2037 * 12 -1) || ($enmois<1970)){return 0;} 
         $an_suivant = floor(($enmois+1)/12); 
         $mois_suivant = $enmois + 1 - 12 * $an_suivant; 
         $duree=mktime(0, 0, 1, $mois_suivant, 1, $an_suivant)-mktime(0, 0, 1, 
   $mois, 1, $an);
         return ($duree/(3600*24)); 
       }
            echo jourdansmois(14, 2016);


            ?>

    </div>


    <div>

    </div>
</body>

</html>