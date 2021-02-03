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
    <h1 class="text-4xl text-gray-200 pb-2">Réinitialisation</h1>
        <form action="index.php" method="POST">
            <div class="text-gray-700">
                <label class="block mb-1 text-gray-200" for="forms-helpTextCode">Identifiant</label>
                <input type="text" name="user" class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="forms-helpTextCode" aria-describedby="passwordHelp" />
            </div>

            <div class="text-gray-700">
                <label class="block mb-1 text-gray-200" for="forms-mdp">Mot de passe</label>
                <input type="text" name="mdp" class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="password" id="forms-mdp" aria-describedby="passwordHelp" />
            </div>
            <div class="pt-3">
                <button type="submit" value="send" class="h-10 px-5 text-gray-200 transition-colors duration-150 bg-purple-500 rounded-lg focus:shadow-outline hover:bg-gray-500">Connexion</button>
            </div>
        </form>

        <div class="mt-2"> 
            <a href="page.php" class="text-lg text-green-400">Page</a>
        </div>

    </div>

</body>

</html>