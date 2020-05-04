<?php

// vérification des valeurs saisies

$suite = true;
$msg = "";

// le nom est obligatoire
if (empty($_POST['nom'])) {
    $msg = $msg . "Le nom n'est pas renseigné !" . "</br>";
    $suite = false;
}

if (!empty($_POST['nom']) && strlen($_POST['nom']) <= 3) {
    $msg = $msg . "Le nom doit avoir au moins 3 caractères !" . "</br>";
    $suite = false;
}

if ($suite) {    /* si tout est OK, ajout d'un cavalier dans la table */
    require 'config/db.php';
    $request =  "INSERT INTO cavalier (nom, prenom, niveau)
                VALUES (:nom, :prenom, :niveau)";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'   =>  strtoupper($_POST['nom']),
        'prenom'  =>  ucfirst($_POST['prenom']),
        'niveau'  =>  $_POST['niveau'],
    ]);
    header('Location: listeJockey.php');  /* affichage de la nouvelle liste mise à jour */
}

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Echec de création</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formCreateJockey.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>

