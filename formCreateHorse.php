<?php include('partials/head.php') ?>

<?php include('partials/navbar.php') ?>

<main role="main">

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Nouveau pensionnaire</h1>
                <form action="createHorse.php" method="post" class="form" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="formName">Nom du cheval</label>
                        <input name="nom" id="formName" type="text" class="form-control" required>

                        <label for="formRace">Race</label>
                        <select name="race" id="formRace" class="form-control">
                            <!-- liste de valeurs à charger depuis une table : à gérer sur le projet final -->
                            <option value=""></option>
                            <option value="Paint Horse">Paint Horse</option>
                            <option value="Barbe">Barbe</option>
                            <option value="Pur Sang">Pur Sang</option>
                            <option value="Selle Française">Selle Française</option>
                            <option value="KWPN">KWPN</option>
                            <option value="Appaloosa">Appaloosa</option>
                            <option value="Frison">Frison</option>
                            <option value="Shire">Shire</option>
                            <option value="Cob">Cob</option>
                        </select>


                        <label for="formSexe">Sexe</label>
                        <select name="sexe" id="formSexe" class="form-control">
                            <option value=""></option>
                            <option value="0">mâle</option>
                            <option value="1">femelle</option>
                            <option value="2">non déterminé</option>
                        </select>

                        <label for="formPoids">Poids (en kg)</label>
                        <input name="poids" id="formPoids" type="number" class="form-control" min="45" max="1500">

                        <label for="formTaille">Taille (en cm)</label>
                        <input name="taille" id="formTaille" type="number" class="form-control" min="80" max="220">

                        <label for="formImage">Selectionner une image</label>
                        <input name="photo" id="formImage" type="file" class="form-control">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                    <a href="accueil.php" class="btn btn-secondary" type="submit">Annuler</a>

                </form>
            </div>
        </div>
    </div>


</main>

<?php include('partials/script.php') ?>