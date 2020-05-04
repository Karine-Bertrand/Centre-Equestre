<?php

require 'config/db.php';

$request = "SELECT * FROM cheval WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$cheval = $response->fetch(PDO::FETCH_ASSOC);
$msg = "Suppression de la fiche du cheval " . $cheval['nom'];

?>

<?php include('partials/head.php') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h3>Etes vous sûr ?</h3>
        <p><strong><?= $msg ?></strong></p>
        <a href="listeHorse.php" class="btn btn-primary">Annuler</a>
        <a href="deleteHorse.php?id=<?= $_GET['id'] ?>" class="btn btn-danger">Supprimer</a>
    </div>
</section>

<?php include('partials/script.php') ?>