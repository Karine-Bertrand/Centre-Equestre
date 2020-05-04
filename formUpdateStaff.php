<?php

require 'config/db.php';

$request = "SELECT * FROM staff WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$staff = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

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
                            <!-- contenu des valeurs chargées depuis une table : à gérer sur projet final -->
                            <option value="Dirigeant" <?= ($staff['fonction'] == 'dirigeant' ? 'selected' : '') ?>>Dirigeant</option>
                            <option value="Vétérinaire" <?= ($staff['fonction'] == 'vétérinaire' ? 'selected' : '') ?>>Vétérinaire</option>
                            <option value="Moniteur" <?= ($staff['fonction'] == 'moniteur' ? 'selected' : '') ?>>Moniteur</option>
                            <option value="Maréchal ferrand" <?= ($staff['fonction'] == 'maréchal ferrand' ? 'selected' : '') ?>>Maréchal ferrand</option>
                            <option value="Palfrenier" <?= ($staff['fonction'] == 'palfrenier' ? 'selected' : '') ?>>Palfrenier</option>
                        </select>

                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                    <a href="listeStaff.php" class="btn btn-secondary" type="submit">Annuler</a>

                </form>
            </div>
        </div>
    </div>

</main>

<?php include('partials/script.php') ?>
