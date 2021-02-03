<?php

$showForm = true;

$errorMessage = [];
// texte
$regexText = '/^[a-zA-Z]+$/';
// adresse postale 
$regexAdresse = '/^[a-zA-Z][0-9 ]+$/';
//adresse email 
$regexMail = '/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/';
//Number
$regexNumber = '/^[0-9]/';
//URL
$regexUrl = '';
//date 
$regexDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
// textArea 
$regexTextArea = '/[a-z0-9]+$/'; //ponctuation à ajouter dans la regex

$certificateArray = [
    1 => 'sans',
    2 => 'bac',
    3 => 'bac supp',
    4 => 'DUT',
    5 => 'master',
];

if (isset($_POST['submit'])) {


    // Nom
    if (isset($_POST['lastname'])) {
        if (!preg_match($regexText, $_POST['lastname'])) {
            $errorMessage['lastname'] = 'Veuillez saisir un nom valide';
        }
        if (empty($_POST['lastname'])) {
            $errorMessage['lastname'] = 'Veuillez écrire votre nom';
        }
    }

    // Prénom
    if (isset($_POST['firstname'])) {
        if (!preg_match($regexText, $_POST['firstname'])) {
            $errorMessage['firstname'] = 'Veuillez saisir un prénom valide';
        }
        if (empty($_POST['firstname'])) {
            $errorMessage['firstname'] = 'Veuillez écrire votre Prénom';
        }
    }

    // Date de naissance
    if (isset($_POST['birth'])) {
        if (!preg_match($regexDate, $_POST['birth'])) {
            $errorMessage['birth'] = 'erreur';
        }
        if (empty($_POST['birth'])) {
            $errorMessage['birth'] = 'Date de naissance ?';
        }
    }

    //Nationalité
    if (!isset($_POST['nationality'])) {
        $errorMessage['nationality'] = 'Nationalité invalide';
    }

    // Diplome
    if (!isset($_POST['diplome'])) {
        $errorMessage['diplome'] = 'Hey !!!';
    }

    if (isset($_POST['diplome'])) {
        if (!array_key_exists($_POST['diplome'], $certificateArray)) {
            $errorMessage['diplome'] = 'Méchant !';
        }
    }

    // Pays 
    if (isset($_POST['country'])) {
        if (!preg_match($regexText, $_POST['country'])) {
            $errorMessage['country'] = 'Pays invalide';
        }
        if (empty($_POST['country'])) {
            $errorMessage['country'] = 'Votre pays ?';
        }
    }

    // Adresse


    // Adresse e-mail
    if (isset($_POST['mail'])) {
        //filter pour éviter une regex
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errorMessage['mail'] = 'Veuillez saisir un bon e-mail !';
        }

        if (empty($_POST['mail'])) {
            $errorMessage['mail'] = 'Veuillez indiquer votre e-mail !';
        }
    }

    // Téléphone
    if (isset($_POST['phone'])) {
        if (!preg_match($regexNumber, $_POST['phone'])) {
            $errorMessage['phone'] = 'Numéro invalide';
        }
        if (empty($_POST['phone'])) {
            $errorMessage['phone'] = 'Votre numéro de téléphone !';
        }
    }

    // Numéro pole emploi
    if (isset($_POST['emploi'])) {
        if (!preg_match($regexNumber, $_POST['emploi'])) {
            $errorMessage['emploi'] = 'Numéro invalide';
        }
        if (empty($_POST['emploi'])) {
            $errorMessage['emploi'] = 'Votre numéro pôle emploi !';
        }
    }

    // Link codecademy
    if (isset($_POST['codecademy'])) {
        //filter pour éviter une regex
        if (!filter_var($_POST['codecademy'], FILTER_VALIDATE_URL)) {
            $errorMessage['codecademy'] = 'Veuillez saisir un lien valide.';
        }
        if (empty($_POST['codecademy'])) {
            $errorMessage['codecademy'] = 'Votre lien.';
        }
    }

    // Hero
    if (isset($_POST['hero'])) {
        if (!preg_match($regexText, $_POST['hero'])) {
            $errorMessage['hero'] = 'Invalide';
        }
        if (empty($_POST['hero'])) {
            $errorMessage['hero'] = 'Message vide.';
        }
    }

    // Hack
    if (isset($_POST['hack'])) {
        if (!preg_match($regexText, $_POST['hack'])) {
            $errorMessage['hack'] = 'Invalide';
        }
        if (empty($_POST['hack'])) {
            $errorMessage['hack'] = 'Message vide.';
        }
    }

    // radio
    if (!isset($_POST['check'])) {
        $errorMessage['check'] = 'Veuillez faire un choix';
    }

    if (count($errorMessage) == 0) {
        $lastName = htmlspecialchars($_POST['lastname']);
        $firstName = htmlspecialchars($_POST['firstname']);
        $birth = htmlspecialchars($_POST['birth']);
        $phone = htmlspecialchars($_POST['phone']);
        $country = htmlspecialchars($_POST['country']);
        $nationality = htmlspecialchars(($_POST['nationality']));
        $mail = htmlspecialchars(($_POST['mail']));
        $showForm = false;
    }
}
