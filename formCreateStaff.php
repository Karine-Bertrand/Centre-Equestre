<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Nouvel intervenant</h1>
                <form action="createStaff.php" method="post" class="form">

                    <div class="form-group">

                        <label for="formName">Nom</label>
                        <input name="nom" id="formName" type="text" class="form-control" required>

                        <label for="formName">Prénom</label>
                        <input name="prenom" id="formPrename" type="text" class="form-control">

                        <label for="formFonction">Fonction au sein des écuries</label>
                        <select name="fonction" id="formFonction" class="form-control" required>
                            <option value="0"> </option>
                            <option value="Dirigeant">Dirigeant</option>
                            <option value="Vétérinaire">Vétérinaire</option>
                            <option value="Moniteur">Moniteur</option>
                            <option value="Maréchal ferrand">Maréchal ferrand</option>
                            <option value="Palfrenier">Palfrenier</option>
                        </select>

                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                    <a href="accueil.php" class="btn btn-secondary" type="submit">Annuler</a>

                </form>
            </div>
        </div>
    </div>


</main>

<?php include('partials/script.php') ?>