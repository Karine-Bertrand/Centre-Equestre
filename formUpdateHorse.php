<?php

require 'config/db.php';
$request = "SELECT * FROM cheval WHERE id=" . $_GET['id'];
$response = $bdd->query($request);
$cheval = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Mise à jour de la fiche du pensionnaire</h1>
                <form action="updateHorse.php?id=<?= $_GET['id'] ?>" method="post" class="form" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="formName">Nom du cheval</label>
                        <input name="nom" id="formName" type="text" class="form-control" value="<?= $cheval['nom'] ?>" required>

                        <label for="formRace">Race</label>
                        <select name="race" id="formRace" class="form-control">
                            <!-- contenu à charger depuis une table : à gérer sur projet final -->
                            <option value="Paint Horse" <?= ($cheval['race'] == 'Paint Horse' ? 'selected' : '') ?>>Paint Horse</option>
                            <option value="Barbe" <?= ($cheval['race'] == 'Barbe' ?  'selected' : '') ?>>Barbe</option>
                            <option value="Pur Sang" <?= ($cheval['race'] == 'Pur Sang' ?  'selected' : '') ?>>Pur Sang</option>
                            <option value="Selle Française" <?= ($cheval['race'] == 'Selle Français' ?  'selected' : '') ?>>Selle Française</option>
                            <option value="KWPN" <?= ($cheval['race'] == 'KWPN' ?  'selected' : '') ?>>KWPN</option>
                            <option value="Appaloosa" <?= ($cheval['race'] == 'Appaloosa' ?  'selected' : '') ?>>Appaloosa</option>
                            <option value="Frison" <?= ($cheval['race'] == 'Frison' ?  'selected' : '') ?>>Frison</option>
                            <option value="Shire" <?= ($cheval['race'] == 'Shire' ?  'selected' : '') ?>>Shire</option>
                            <option value="Cob" <?= ($cheval['race'] == 'Cob' ?  'selected' : '') ?>>Cob</option>
                        </select>


                        <label for="formSexe">Sexe</label>
                        <select name="sexe" id="formSexe" class="form-control">
                            <option value="0" <?= ($cheval['sexe'] == '0' ? 'selected' : '') ?>>mâle</option>
                            <option value="1" <?= ($cheval['sexe'] == '1' ? 'selected' : '') ?>>femelle</option>
                            <option value="2" <?= ($cheval['sexe'] == '2' ? 'selected' : '') ?>>non déterminé</option>
                        </select>

                        <label for="formPoids">Poids (en kg)</label>
                        <input name="poids" id="formPoids" type="number" class="form-control" min="45" max="1500" value="<?= $cheval['poids'] ?>">

                        <label for="formTaille">Taille (en cm)</label>
                        <input name="taille" id="formTaille" type="number" class="form-control" min="80" max="220" value="<?= $cheval['taille'] ?>">

                        <label for="image">Photo déjà atribuée : </label>
                        <input name="photo_avant" value="<?= $cheval['photo'] ?>"></br>

                        <label for="image">Modifier la photo</label>
                        <input name="photo" type="file"></br>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                    <a href="listeHorse.php" class="btn btn-secondary" type="submit">Annuler</a>

                </form>
            </div>
        </div>
    </div>

</main>

<?php include('partials/script.php') ?>