<?php

require 'config/db.php'; /* connexion */
$request = "SELECT * FROM cavalier";/* appel requete */
$response = $bdd->query($request);/* résultat de la requete */
$jockeys = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="album py-5 bg-light">

        <div class="container">

            <div class="row">

                <?php foreach ($jockeys as $jockey) : ?>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2 class="text-center"><?= $jockey['prenom'] . " " . $jockey['nom'] ?></h2>
                                    <p> <?= ($jockey['niveau'] > 0) ? "Niveau validé : " . $jockey['niveau'] : "non inscrit à l'examen"; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="formUpdateJockey.php?id=<?= $jockey['id'] ?>" class="btn btn-primary my-2">Modifier</a>
                                    <a href="formDeleteJockey.php?id=<?= $jockey['id'] ?>" class="btn btn-secondary my-2">Supprimer</a>
                                </div>
                            </div>
                            <!-- <img src="#" class="card-img-bottom" alt="pas d'image pour l'instant"> -->
                        </div>
                    </div>

                <?php endforeach ?>

            </div>

        </div>

    </div>

</main>

<?php include('partials/footer.php') ?>

<?php include('partials/script.php') ?>