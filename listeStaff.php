<?php

require 'config/db.php'; /* connexion */
$request = "SELECT * FROM staff";/* appel requete */
$response = $bdd->query($request);/* résultat de la requete */
$staffs = $response->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Ecuries de Camille</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <?php include('partials/navbar.php') ?>

    <main role="main">

        <div class="album py-5 bg-light">

            <div class="container">

                <div class="row">

                    <?php foreach ($staffs as $staff) : ?>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h2 class="text-center"><?= $staff['prenom'] . " " . $staff['nom'] ?></h2>
                                        <p><?= $staff['fonction'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="formUpdateStaff.php?id=<?= $staff['id'] ?>" class="btn btn-primary my-2">Modifier</a>
                                        <a href="formDeleteStaff.php?id=<?= $staff['id'] ?>" class="btn btn-secondary my-2">Supprimer</a>
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>