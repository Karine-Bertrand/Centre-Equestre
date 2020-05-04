<?php

// vérification des valeurs saisies

$suite = true;
$msg = "";

// le nom est obligatoire
if (empty($_POST['nom'])) {
    $msg = $msg . "Le nom n'est pas renseigné !" . "</br>";
    $suite = false;
}

if ($suite) {
    if (!empty($_POST['poids'])) {
        if ($_POST['poids'] >= 45 && $_POST['poids'] <= 1500) {
            // $suite = true;
        } else {
            $msg = $msg . "Le poids doit être compris entre 45 et 1500 kg !" . "</br>";
            $suite = false;
        }
    }
    if (!empty($_POST['taille'])) {
        if ($_POST['taille'] >= 80 && $_POST['taille'] <= 220) {
            // $suite = true;
        } else {
            $msg = $msg . "La taille doit être comprise entre 80 et 220 cm !" . "</br>";
            $suite = false;
        }
    }
}

if ($suite) {

    if ($_FILES['photo']['name'] === "") {
        echo "pas de changement";
        $nomPhoto = $_POST['photo_avant'];
    } else {
        echo "photo modifiée";
        $_FILES['photo'];
        $photo = $_FILES['photo'];
        $tailleDuFichier = $photo['size'];
        $pathinfoData = pathinfo($photo['name']);
        $nomDuFichier = $pathinfoData['filename'];
        $extensionDuFichier = $pathinfoData['extension'];
        if ($extensionDuFichier != 'jpg' && $photo['type'] != "image/jpeg") {
            $suite = false;
            $msg = $msg . "Le type de format de l'image n'est pas pris en charge : utilisez un format jpeg";
        } elseif ($tailleDuFichier > 3145728) {
            $msg = $msg .  "L'image est trop volumineuse : taille maxi autorisée 3 Mb";
        }
        $nomPhoto = $nomDuFichier . '-' . uniqid() . '.' . $extensionDuFichier;
        move_uploaded_file($photo['tmp_name'],  __DIR__  . '/assets/img/' . $nomPhoto);
    }

    // si tout est OK, modif du cheval dans la table
    require 'config/db.php'; // connexion à la db
    $request =  "UPDATE cheval 
                SET nom = :nom, race = :race, sexe = :sexe, poids = :poids, taille = :taille, photo = :photo
                WHERE id = :id";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'       =>  $_POST['nom'],
        'race'      =>  $_POST['race'],
        'sexe'      =>  $_POST['sexe'],
        'poids'     =>  $_POST['poids'],
        'taille'    =>  $_POST['taille'],
        'photo'     =>  $nomPhoto,
        'id'        =>  $_GET['id']
    ]);

    header('Location: listeHorse.php');  /* affichage de la liste avec fiche mise à jour */
}

?>

<!-- la partie html s'exécute si on n'est pas sorti de la page -->
<?php include('partials/script.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Modification non valide</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formUpdateHorse.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>