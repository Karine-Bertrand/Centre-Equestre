<?php

// vérification des valeurs modifiées

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

if ($suite) {    /* si tout est OK, modif du cavalier dans la table */

    require 'config/db.php';
    $request =  "UPDATE cavalier 
                SET nom = :nom, prenom = :prenom, niveau = :niveau
                WHERE id = :id";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'   =>  strtoupper($_POST['nom']),
        'prenom'  =>  ucfirst($_POST['prenom']),
        'niveau'  =>  $_POST['niveau'],
        'id'      =>  $_GET['id']
    ]);

    header('Location: listeJockey.php');  /* affichage de la liste avec fiche mise à jour */
}

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Modification non valide</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formUpdateJockey.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>