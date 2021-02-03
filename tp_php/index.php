<?php

$dossier_photos = "photos/"; // "photos/ correspond à l'endroit ou les imgages seront stocker
$uploadOk = true;
$goodImage = "";
$existImage = "";
$bigImage = "";
$extensionImage = "";
$notSendImage = "";
$sendImage = "";
$erreurImage = "";
$notImage = "";


if (isset($_FILES["fichier"])) {
  $target_file = $dossier_photos . basename(uniqid().$_FILES["fichier"]["name"]);//uniqid() permet d'envoyer le même nom pour une image
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
  if (isset($_POST["submit"]) && $_FILES["fichier"]["error"] != 4) {
    $check = getimagesize($_FILES["fichier"]["tmp_name"]);
    
    if ($check !== false) {
      $goodImage = "C'est bien une image - " . $check["mime"] . ".";
      if ($check["mime"] == "image/jpeg" || $check["mime"] == "image/jpg" || $check["mime"] == "image/png" || $chek["mime"] == "image/GIF") { //on vérifie la racine du fichier
        if (file_exists($target_file)) {
          $existImage = "Désolé, le nom de l'image existe déjà.";
          $uploadOk = false;
        }

        // Vérification de la taille
        if (($_FILES["fichier"]["size"]) > 100000) {
          $bigImage = "l'image dépasse 1mo.";
          $uploadOk = false;
        }

        // Vérification de la taille
        if (($_FILES["fichier"]["size"]) > 100000) {
          $bigImage = "l'image dépasse 1mo.";
          $uploadOk = false;
        }

        //Vérification extension de l'image
        if (
          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif"
        ) {
          $extensionImage = "Désolé les images sont uniquement autorisées en JPG, JPEG, PNG & GIF.";
          $uploadOk = false;
        }

        // Vérification si l'image a pu être envoyé
        if ($uploadOk == false) {
          $notSendImage = " elle n'a pas été envoyé.";
          // Vérification image envoyé
        } else {
          if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
            $sendImage = "Votre image "  . htmlspecialchars(basename($_FILES["fichier"]["name"])) . "  a bien été envoyé.";
          } else {
            $erreurImage = "Désolé il y a eu une erreur de téléchargement de votre image.";
          }
        }
      }
      $uploadOk = true;
    } else {
      $notImage =  "Ce n'est pas une image.";
      $uploadOk = false;
    }
  }
}
?>

<?php
  // compteur d'images
    $MonRepertoire = "photos"; //Répertoire contenant
    $scanRepertoire =  scandir($MonRepertoire); //scan le répertoire et met les fichier qu'il y trouve dedans
    $nbreImg = count($scanRepertoire)-2;
  
?>
<!doctype html>
<html lang="fr">

<head>
  <title>tp_php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">
        <h1 class="h5">Choisir une image</h1>
        <p>* Votre image ne doit pas depasser 1mo</p>
        <form method="POST" name="index.php" enctype="multipart/form-data">
          <input type="hidden" name="fichier" value="100000" />
          <input type="file" name="fichier" id="fileToUpload" />
          <button type="submit" name="submit" class="btn btn-dark mt-2 mb-3">Envoyer <i class="fas fa-upload"></i></button>
          <a type="button" href="gallery.php" class="btn btn-dark mt-2 mb-3">Gallerie <span class="badge badge-light"><?php echo $nbreImg; ?></span></a>
        </form>

        

        <div class="text-info"><?php echo $goodImage ?></div>
        <div class="text-danger"><?php echo $existImage ?></div>
        <div class="text-danger"><?php echo $bigImage ?></div>
        <div class="text-danger"><?php echo $extensionImage ?></div>
        <div class="text-danger"><?php echo $notSendImage ?></div>
        <div class="text-success"><?php echo $sendImage ?></div>
        <div class="text-danger"><?php echo $erreurImage ?></div>
        <div class="text-danger"><?php echo $notImage ?></div>
        <img id="imgPreview">
      </div>


      <div class="col-8">
        <img src="img/snow-1178280_640.jpg" alt="image de sapin sous la neige">
        <div class="text">
          
          <p>Nous somme le <?php echo date('d/m/Y'); ?> <br/> C'est bientôt Noël!!!!! <i class="fas fa-sleigh"> <i class="fas fa-sleigh"></i></i></p>
          
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/script.js"></script>
</body>

</html>