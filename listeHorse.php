<?php

require 'config/db.php';
$request = "SELECT * FROM cheval";
$response = $bdd->query($request);
$chevaux = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="album py-5 bg-light">

        <div class="container">

            <div class="row">

                <?php foreach ($chevaux as $cheval) : ?>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2 class="text-center"><?= $cheval['nom'] ?></h2>
                                    <p>Il s'agit d'<?= ($cheval['sexe'] === "0") ? 'un mâle' : (($cheval['sexe'] === "1") ? 'une femelle' : 'un cheval'); ?> de race <strong><?= $cheval['race'] ?></strong></p>
                                </div>
                                <img src="assets/img/<?= $cheval['photo'] ?>" alt="..." class="card-img-bottom">
                                <p class="card-text">
                                    <?= $cheval['nom'] ?> pèse <?= $cheval['poids'] ?> kg </br>
                                    et mesure <?= $cheval['taille'] ?> cm au garrot.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="formUpdateHorse.php?id=<?= $cheval['id'] ?>" class="btn btn-primary my-2">Modifier</a>
                                    <a href="formDeleteHorse.php?id=<?= $cheval['id'] ?>" class="btn btn-secondary my-2">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>

        </div>

    </div>

</main>

<?php include('partials/footer.php') ?>

<?php include('partials/script.php') ?>