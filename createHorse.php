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

    $_FILES['photo'];
    $photo = $_FILES['photo'];

    $tailleDuFichier = $photo['size']; //

    $pathinfoData = pathinfo($photo['name']);
    $nomDuFichier = $pathinfoData['filename'];
    $extensionDuFichier = $pathinfoData['extension'];
    $nouveauNomDuFichier = $nomDuFichier . '-' . uniqid() . '.' . $extensionDuFichier;

    move_uploaded_file($photo['tmp_name'],  __DIR__  . '/assets/img/' . $nouveauNomDuFichier);

    // si tout est OK, ajout d'un cheval dans la table
    require 'config/db.php';
    $request =  "INSERT INTO cheval (nom, race, sexe, poids, taille, photo)
                VALUES (:nom, :race, :sexe, :poids, :taille, :photo)";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'   =>  $_POST['nom'],
        'race'  =>  $_POST['race'],
        'sexe'  =>  $_POST['sexe'],
        'taille' =>  $_POST['taille'],
        'poids' =>  $_POST['poids'],
        'photo' => $nouveauNomDuFichier
    ]);


    header('Location: listeHorse.php');  /* affiche de la nouvelle liste mise à jour */
}

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Echec de création</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formCreateHorse.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>