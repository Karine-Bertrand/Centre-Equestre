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

if ($suite) {    /* si tout est OK, modif du salarié dans la table */
    require 'config/db.php';
    $request =  "UPDATE staff 
                SET nom= :nom, prenom= :prenom, fonction= :fonction
                WHERE id= :id";
    $response = $bdd->prepare($request);
    $response->execute([
        'nom'       =>  strtoupper($_POST['nom']),
        'prenom'    =>  ucfirst($_POST['prenom']),
        'fonction'  =>  strtolower($_POST['fonction']),
        'id'        => $_GET['id']
    ]);

    header('Location: listeStaff.php');  /* affichage de la liste avec fiche mise à jour */
}

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Modification non valide</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="formUpdateStaff.php" class="btn btn-primary">Retour</a>
    </div>
</section>

<?php include('partials/script.php') ?>