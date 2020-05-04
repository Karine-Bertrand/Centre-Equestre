<?php

require 'config/db.php';

$request = "SELECT * FROM cavalier WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$jockey = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Modification de la fiche de l'élève</h1>
                <form action="updateJockey.php?id=<?= $_GET['id'] ?>" method="post" class="form">

                    <div class="form-group">

                        <label for="formName">Nom</label>
                        <input name="nom" id="formName" type="text" class="form-control" value="<?= $jockey['nom'] ?>" required>

                        <label for="formName">Prénom</label>
                        <input name="prenom" id="formPrename" type="text" class="form-control" value="<?= $jockey['prenom'] ?>">

                        <label for="formNiveau">Niveau de galop validé</label>
                        <select name="niveau" id="formNiveau" class="form-control">
                            <option value="0" <?php if ($jockey['niveau'] == '0') { ?> selected <?php } ?>> </option>
                            <option value="1" <?php if ($jockey['niveau'] == '1') { ?> selected <?php } ?>>1</option>
                            <option value="2" <?php if ($jockey['niveau'] == '2') { ?> selected <?php } ?>>2</option>
                            <option value="3" <?php if ($jockey['niveau'] == '3') { ?> selected <?php } ?>>3</option>
                            <option value="4" <?php if ($jockey['niveau'] == '4') { ?> selected <?php } ?>>4</option>
                            <option value="5" <?php if ($jockey['niveau'] == '5') { ?> selected <?php } ?>>5</option>
                            <option value="6" <?php if ($jockey['niveau'] == '6') { ?> selected <?php } ?>>6</option>
                            <option value="7" <?php if ($jockey['niveau'] == '7') { ?> selected <?php } ?>>7</option>
                        </select>

                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                    <a href="listeJockey.php" class="btn btn-secondary" type="submit">Annuler</a>

                </form>
            </div>
        </div>
    </div>


</main>

<?php include('partials/script.php') ?>