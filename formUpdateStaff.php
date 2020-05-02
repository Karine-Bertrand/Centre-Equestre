<?php

require 'config/db.php';

$request = "SELECT * FROM staff WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$staff = $response->fetch(PDO::FETCH_ASSOC);


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

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h1>Modifier la fiche de l'intervenant</h1>
                    <form action="updateStaff.php?id=<?= $_GET['id'] ?>" method="post" class="form">

                        <div class="form-group">

                            <label for="formName">Nom</label>
                            <input name="nom" id="formName" type="text" class="form-control" value="<?= $staff['nom'] ?>" required>

                            <label for="formName">Prénom</label>
                            <input name="prenom" id="formPrename" type="text" class="form-control" value="<?= $staff['prenom'] ?>">

                            <label for="formFonction">Fonction au sein des écuries</label>
                            <select name="fonction" id="formFonction" class="form-control" required>
                                <option value="Dirigeant"        <?= ($staff['fonction'] == 'dirigeant' ? 'selected' : '') ?> >Dirigeant</option>
                                <option value="Vétérinaire"      <?= ($staff['fonction'] == 'vétérinaire' ? 'selected' : '') ?> >Vétérinaire</option>
                                <option value="Moniteur"         <?= ($staff['fonction'] == 'moniteur' ? 'selected' : '') ?> >Moniteur</option>
                                <option value="Maréchal ferrand" <?= ($staff['fonction'] == 'maréchal ferrand' ? 'selected' : '') ?> >Maréchal ferrand</option>
                                <option value="Palfrenier"       <?= ($staff['fonction'] == 'palfrenier' ? 'selected' : '') ?> >Palfrenier</option>
                            </select>

                        </div>

                        <input class="btn btn-primary" type="submit" value="Valider">
                        <a href="listeStaff.php" class="btn btn-secondary" type="submit">Annuler</a>

                    </form>
                </div>
            </div>
        </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>