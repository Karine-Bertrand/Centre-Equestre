<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Nouvel élève</h1>
                <form action="createJockey.php" method="post" class="form">

                    <div class="form-group">

                        <label for="formName">Nom</label>
                        <input name="nom" id="formName" type="text" class="form-control" required>

                        <label for="formName">Prénom</label>
                        <input name="prenom" id="formPrename" type="text" class="form-control">

                        <label for="formNiveau">Niveau de galop validé</label>
                        <select name="niveau" id="formNiveau" class="form-control">
                            <option value="0"> </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
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