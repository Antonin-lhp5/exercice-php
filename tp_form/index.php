<?php

require_once 'controller.php';



?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <title>TP partie 9 php</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
</head>
<title>TP form</title>
</head>

<body class="max-w-xl mx-auto bg-gray-900">
    <div class="flex flex-col">
        <?php if ($showForm) { ?>
            <h1 class="text-4xl font-bold py-5 text-white">Futur apprenant</h1>

            <form method="post" action="index.php" class=" w-full max-w-lg">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="firstname">
                            Prénom
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="firstname" id="firstname" type="text" placeholder="ex:William" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['firstname']) ? $errorMessage['firstname'] : ''  ?></span>
                        </p>

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="lastname">
                            Nom
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="lastname" id="lastname" type="text" placeholder="Shakespeare" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['lastname']) ? $errorMessage['lastname'] : ''  ?></span>
                        </p>

                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-city">
                            Date de naissance
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="birth" id="naissance" type="date" placeholder="">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['birth']) ? $errorMessage['birth'] : ''  ?></span>
                        </p>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-state">
                            Nationalité
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nationality" id="grid-state">
                                <option disabled selected>Nationalité</option>
                                <option>Française</option>
                                <option>Anglaise</option>
                                <option>Américaine</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <p class="text-red-500 text-sm">
                                <span><?= isset($errorMessage['nationality']) ? $errorMessage['nationality'] : ''  ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-zip">
                            Pays
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="France" name="country" value="<?= isset($_POST['country']) ? $_POST['country'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['country']) ? $errorMessage['country'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="adresse">
                            Adresse
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="adresse" id="" type="text" placeholder="Adresse" value="<?= isset($_POST['adresse']) ? $_POST['adresse'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['adresse']) ? $errorMessage['adresse'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-password">
                            Adresse e-mail
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="mail" id="email" type="email" placeholder="salut@mail.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['mail']) ? $errorMessage['mail'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-first-name">
                            Téléphone
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" name="phone" type="text" placeholder="00 00 00 00 00" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['phone']) ? $errorMessage['phone'] : ''  ?></span>
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="diplome">
                            Dîplome
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="diplome" id="diplome">
                                <option selected disabled>choix</option>
                                <?php
                                foreach ($certificateArray as $key => $value) { ?>
                                    <option value="<?= $key ?>" <?= isset($_POST['diplome']) && $_POST['diplome'] == $key ? 'selected' : '' ?>><?= $value ?></option>
                                <?php } ?>


                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <p class="text-red-500 text-sm">
                                <span><?= isset($errorMessage['diplome']) ? $errorMessage['diplome'] : ''  ?></span>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="emploi">
                            Numéro pôle emploi
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="emploi" type="number" placeholder="xxx-xxx" name="emploi">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['emploi']) ? $errorMessage['emploi'] : ''  ?></span>
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="grid-state">
                            Badge
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5 ou plus</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="code">
                            Liens codeacademy
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="code" type="text" placeholder="Adresse" name="codecademy" value="<?= isset($_POST['codecademy']) ? $_POST['codecademy'] : '' ?>">
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['codecademy']) ? $errorMessage['codecademy'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="hero">
                            Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="hero" type="text" name="hero" value="<?= isset($_POST['hero']) ? $_POST['hero'] : '' ?>" placeholder=""></textarea>
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['hero']) ? $errorMessage['hero'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="hack">
                            Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                        </label>
                        <textarea id="hack" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="" name="hack" value="<?= isset($_POST['hack']) ? $_POST['hack'] : '' ?>" placeholder=""></textarea>
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['hack']) ? $errorMessage['hack'] : ''  ?></span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="">
                            Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?
                        </label>
                        <div><input type="radio" name="check" class="form-radio  text-gray-600" value="oui" <?= isset($_POST['check']) && $_POST['check'] == 'oui' ? 'checked' : '' ?>>
                            <span class="ml-2 text-gray-200">Oui</span>
                        </div>

                        <div> <input type="radio" name="check" class="form-radio  text-gray-600" value="non" <?= isset($_POST['check']) && $_POST['check'] == 'non' ? 'checked' : '' ?>>
                            <span class="ml-2 text-gray-200">Non</span>
                            <p class="text-red-500 text-sm">
                        </div>
                        <p class="text-red-500 text-sm">
                            <span><?= isset($errorMessage['check']) ? $errorMessage['check'] : ''  ?></span>
                        </p>
                    </div>
                </div>


                <button type="submit" name="submit" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-base px-8 py-3 rounded shadow-md hover:shadow-lg outline-none focus:outline-none mr-1 mb-5">
                    Envoyer</button>

            </form>
        <?php } else { ?>
            <div class="text-white">
                <h1 class="text-4xl font-bold py-5 text-white">Futur apprenant</h1>
                <p>Votre prénom est <?= $firstName ?></p>
                <p>Votre nom est <?= $lastName ?></p>
                <p>Votre année de naissance est <?= $birth ?></p>
                <p>Votre numéro de téléphone est <?= $phone ?></p>
            </div>

        <?php } ?>

    </div>




</body>

</html>