<?php

require 'config/db.php';

$request = "SELECT * FROM staff WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$staff = $response->fetch(PDO::FETCH_ASSOC);

$msg = "Suppression de la fiche de l'intervenant " . $staff['prenom'] . " " . $staff['nom'];

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Etes vous sûr ?</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="listeStaff.php" class="btn btn-primary">Annuler</a>
        <a href="deleteStaff.php?id=<?= $_GET['id'] ?>" class="btn btn-danger">Supprimer</a>
    </div>
</section>

<?php include('partials/script.php') ?>