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
if (empty($_POST['fonction'])) {
    $msg = $msg . "La fonction n'est pas renseignée !" . "</br>";
    $suite = false;
}

if ($suite) {    /* si tout est OK, ajout d'un salarié dans la table */
    require 'config/db.php';
    $request =  "INSERT INTO staff (nom, prenom, fonction)
                VALUES (:nom, :prenom, :fonction)";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'       =>  strtoupper($_POST['nom']),
        'prenom'    =>  ucfirst($_POST['prenom']),
        'fonction'  =>  strtolower($_POST['fonction']),
    ]);
    header('Location: listeStaff.php');  /* affichage de la nouvelle liste mise à jour */
}

?>

<?php include ('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Echec de création</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formCreateStaff.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include ('partials/script.php') ?>